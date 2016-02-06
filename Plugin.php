<?php namespace One47\InfusionsoftAPI;

use Backend;
use System\Classes\PluginBase;

/**
 * InfusionsoftAPI Plugin Information File
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
            'name'        => 'one47.infusionsoftapi::lang.plugin.name',
            'description' => 'one47.infusionsoftapi::lang.plugin.description',
            'author'      => 'One47',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'One47\InfusionsoftAPI\Components\Products' => 'products',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings'    => [
                'label'         => 'one47.infusionsoftapi::lang.plugin.name',
                'icon'          => 'icon-leaf',
                'description'   => 'one47.infusionsoftapi::lang.settings.description',
                'class'         => 'One47\InfusionsoftAPI\Models\Settings',
                'order'         => 500
            ]
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        //return []; // Remove this line to activate

        return [
            'one47.infusionsoftapi.some_permission' => [
                'tab' => 'Infusionsoft API',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'infusionsoftapi' => [
                'label'       => 'InfusionsoftAPI',
                'url'         => Backend::url('one47/infusionsoftapi/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['one47.infusionsoftapi.*'],
                'order'       => 500,
            ],
        ];
    }

    public function boot()
    {
        set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__.'/vendor/infusionsoft/php-sdk/src');
    }

}
