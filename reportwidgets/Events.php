<?php namespace NikolayKolesnichenko\HunterError\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use RainLab\GoogleAnalytics\Classes\Analytics;
use ApplicationException;
use Exception;

/**
 *  Hunter Error events widget
 *  This widget can show any events from GA, You can filter it by event category.
 *  @author Nikolay Kolesnichenko
 */
class Events extends ReportWidgetBase
{

     public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'Widget title',
                'default'           => 'Top Events',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'The Widget Title is required.'
            ],
            'category' => [
                'title'             => 'Filter only one category',
                'default'           => 'JavaScript Error',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'The category is required.'
            ],
            'days' => [
                'title'             => 'Number of days to display data for',
                'default'           => '7',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'number' => [
                'title'             => 'Number of items to display',
                'default'           => '10',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$'
            ]
        ];
    }

    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('events');
    }

    protected function loadData()
    {
        $days = $this->property('days');
        if (!$days)
            throw new ApplicationException('Invalid days value: '.$days);

        $obj = Analytics::instance();
        $data = $obj->service->data_ga->get(
                                    $obj->viewId,
                                    $days.'daysAgo',
                                    'today',
                                    'ga:totalEvents',
                                        [
                                            'dimensions' => 'ga:eventCategory, ga:eventAction, ga:eventLabel',
                                            'sort' => '-ga:totalEvents',
                                            'filters' => 'ga:eventCategory=='.$this->property('category', 'JavaScript Error'),
                                            'max-results' => $this->property('number', 10)
                                        ]
                                    );

        $rows = $data->getRows() ?: [];
        $this->vars['rows'] = $rows;

        $total = 0;
        foreach ($rows as $row)
            $total += $row[3];

        $this->vars['total'] = $total;
    }
}
