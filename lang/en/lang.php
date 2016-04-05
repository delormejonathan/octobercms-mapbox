<?php return [
    'plugin' => [
        'name' => 'Mapbox',
        'description' => 'Provides a ready-to-use implementation of Mapbox',

        'settings' => [
            'label'       => 'Mapbox',
            'description' => 'Manage API settings',

            'api_key' => [
                'label' => 'Mapbox Access Token',
                'comment' => 'Enter your Mapbox Access Token : https://www.mapbox.com/help/create-api-access-token/'
            ]
        ],

        'components' => [
            'mapbox' => [
                'description' => 'Displays a Mapbox on your page',
                'properties' => [
                    'title' => [
                        'title'       => 'Marker title',
                        'description' => 'Marker title'
                    ],
                    'description' => [
                        'title'       => 'Marker description',
                        'description' => 'Marker description'
                    ],
                    'latitude' => [
                        'title'       => 'Latitude',
                        'description' => 'Latitude'
                    ],
                    'longitude' => [
                        'title'       => 'Longitude',
                        'description' => 'Longitude'
                    ],
                    'height' => [
                        'title'       => 'Height (px)',
                        'description' => 'Element height'
                    ],
                    'zoom' => [
                        'title'       => 'Map zoom',
                        'description' => 'Map zoom'
                    ],
                    'size' => [
                        'title'       => 'Marker size',
                        'description' => 'Marker size'
                    ],
                    'color' => [
                        'title'       => 'Marker color',
                        'description' => 'Set your color in hex format (#ABC123)'
                    ],
                    'symbol' => [
                        'title'       => 'Marker symbol',
                        'description' => 'Choose your symbol on https://www.mapbox.com/maki/'
                    ],
                ]
            ]
        ]
    ]
];