<?php namespace JonathanDelorme\Mapbox\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'jonathandelorme_mapbox_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}