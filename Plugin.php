<?php namespace JonathanDelorme\Mapbox;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Mapbox plugin',
            'description' => 'Provides an ready-to-use implementation of Mapbox.',
            'author'      => 'Jonathan DELORME',
            'icon'        => 'icon-map-marker'
        ];
    }

    public function registerComponents()
    {
        return [
            'JonathanDelorme\Mapbox\Components\Mapbox' => 'mapbox'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'jonathandelorme.mapbox::lang.plugin.settings.label',
                'description' => 'jonathandelorme.mapbox::lang.plugin.settings.description',
                'category'    => 'Misc',
                'icon'        => 'icon-map-marker',
                'class'       => 'JonathanDelorme\Mapbox\Models\Settings',
                'order'       => 100
            ]
        ];
    }
}
