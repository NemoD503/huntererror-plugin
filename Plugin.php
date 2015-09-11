<?php namespace NikolayKolesnichenko\HunterError;

use System\Classes\PluginBase;

/**
 * HunterError Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'HunterError',
            'description' => 'This plugin catches JavaScript error on your site and sends it to Google Analytics',
            'author'      => 'NikolayKolesnichenko',
            'icon'        => 'icon-heartbeat'
        ];
    }

    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.GoogleAnalytics'];

    /**
    * Returns information about registered components
    */
    public function registerComponents()
    {
        return [
            '\NikolayKolesnichenko\HunterError\Components\Hunter' => 'hunter'
        ];
    }

    /**
    * Returns information about registered report widgets
    */
    public function registerReportWidgets()
    {
        return [
            '\NikolayKolesnichenko\HunterError\ReportWidgets\Events' => [
                'label'   => 'Google Analytics events overview',
                'context' => 'dashboard'
            ]
        ];
    }

}
