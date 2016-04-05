<?php return [
    'plugin' => [
        'name' => 'Mapbox',
        'description' => 'Permet d\'ajouter une carte Mapbox à votre site',

        'settings' => [
            'label'       => 'Mapbox',
            'description' => 'Gérer les paramètres API',

            'api_key' => [
                'label' => 'Mapbox Access Token',
                'comment' => 'Entrer votre token d\'accès Mapbox : https://www.mapbox.com/help/create-api-access-token/'
            ]
        ],

        'components' => [
            'mapbox' => [
                'description' => 'Affiche une carte Mapbox',
                'properties' => [
                    'title' => [
                        'title'       => 'Titre du point',
                        'description' => 'Titre du point'
                    ],
                    'description' => [
                        'title'       => 'Description du point',
                        'description' => 'Description du point'
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
                        'title'       => 'Hauteur (px)',
                        'description' => 'Hauteur de l\'élement'
                    ],
                    'zoom' => [
                        'title'       => 'Niveau de zoom',
                        'description' => 'Niveau de zoom'
                    ],
                    'size' => [
                        'title'       => 'Taille du point',
                        'description' => 'Taille du point'
                    ],
                    'color' => [
                        'title'       => 'Couleur du point',
                        'description' => 'Défini la couleur du point en hexa (#ABC123)'
                    ],
                    'symbol' => [
                        'title'       => 'Symbole du point',
                        'description' => 'Choississez votre symbole sur https://www.mapbox.com/maki/'
                    ],
                ]
            ]
        ]
    ]
];