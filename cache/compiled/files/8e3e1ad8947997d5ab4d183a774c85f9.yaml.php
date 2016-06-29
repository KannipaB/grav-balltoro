<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/developer/PhpstormProjects/grav-balltoro/user/themes/balltoro/blueprints.yaml',
    'modified' => 1467186810,
    'data' => [
        'name' => 'Balltoro',
        'version' => '0.0.1',
        'description' => 'Balltoro Theme',
        'icon' => 'empire',
        'author' => [
            'name' => 'Beer'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
