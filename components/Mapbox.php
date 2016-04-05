<?php namespace JonathanDelorme\Mapbox\Components;

use Cms\Classes\ComponentBase;
use JonathanDelorme\Mapbox\Models\Settings;
use Lang;

class Mapbox extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Mapbox',
            'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.description')
        ];
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.title.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.title.title'),
                'default'     => '',
                'type'        => 'string'
            ],
            'description' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.description.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.description.title'),
                'default'     => '',
                'type'        => 'string'
            ],
            'latitude' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.latitude.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.latitude.title'),
                'default'     => '',
                'required'    => true,
                'type'        => 'string'
            ],
            'longitude' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.longitude.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.longitude.title'),
                'default'     => '',
                'required'    => true,
                'type'        => 'string'
            ],
            'zoom' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.zoom.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.zoom.title'),
                'default'     => '',
                'required'    => true,
                'type'        => 'string'
            ],
            'height' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.height.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.height.title'),
                'default'     => '200',
                'required'    => true,
                'type'        => 'string'
            ],
            'symbol' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.symbol.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.symbol.title'),
                'default'     => '',
                'type'        => 'string'
            ],
            'color' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.color.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.color.title'),
                'default'     => '',
                'type'        => 'string'
            ],
            'size' => [
                'description' => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.size.description'),
                'title'       => Lang::get('jonathandelorme.mapbox::lang.plugin.components.mapbox.properties.size.title'),
                'default'     => 'large',
                'type'        => 'dropdown',
                'options'     => ['small' => 'Small', 'medium' => 'Medium', 'large' => 'Large']
            ]
        ];
    }

    public function onRun(){

        $this->addCss('https://api.mapbox.com/mapbox.js/v2.3.0/mapbox.css');
        $this->addJs('https://api.mapbox.com/mapbox.js/v2.3.0/mapbox.js');

        $this->page['api_key']     = Settings::get('api_key', null);
    }

    public function getProperty($key) {
        return $this->property($key);
    }
}