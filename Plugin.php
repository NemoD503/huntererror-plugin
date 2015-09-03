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
            'description' => 'This plugin catches js-error on your site and sends it to Google Analytics',
            'author'      => 'NikolayKolesnichenko',
            'icon'        => 'icon-heartbeat'
        ];
    }

    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.GoogleAnalytics'];

}
