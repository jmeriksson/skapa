<?php

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'hero',
    'label' => __('Hero', 'skapa'),
    'name' => 'hero',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_type',
            'label' => __('Background type', 'skapa'),
            'name' => 'background_type',
            'type' => 'button_group',
            'instructions' => __('Select the type of background you want to use for the hero.', 'skapa'),
            'choices' => [
                'image' => __('Image', 'skapa'),
                'color' => __('Color', 'skapa'),
            ],
            'default_value' => 'image',
            'wrapper' => [
                'width' => '50'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_image',
            'label' => __('Image', 'skapa'),
            'name' => 'background_image',
            'type' => 'image',
            'instructions' => __('Select a big image that will be used as the background for the hero.', 'skapa'),
            'required' => 1,
            'return_format' => 'array',
            'preview_size' => 'medium',
            'conditional_logic' => [
                [
                    [
                        'field' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_type',
                        'operator' => '==',
                        'value' => 'image',
                    ]
                ]
            ],
            'wrapper' => [
                'width' => '50'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_color',
            'label' => __('Color', 'skapa'),
            'name' => 'background_color',
            'type' => 'button_group',
            'instructions' => __('Select a color that will be used as the background for the hero.', 'skapa'),
            'choices' => [],
            'required' => 1,
            'default_value' => 'white',
            'conditional_logic' => [
                [
                    [
                        'field' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_type',
                        'operator' => '==',
                        'value' => 'color',
                    ]
                ]
            ],
            'wrapper' => [
                'width' => '50'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_heading',
            'label' => __('Heading', 'skapa'),
            'name' => 'heading',
            'type' => 'text',
            'instructions' => __('Create a heading for the hero.', 'skapa'),
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_subheading',
            'label' => __('Subheading', 'skapa'),
            'name' => 'subheading',
            'type' => 'text',
            'instructions' => __('Create a subheading for the hero.', 'skapa'),
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_button',
            'label' => __('Button', 'skapa'),
            'name' => 'button',
            'type' => 'link',
            'instructions' => __('Create a button for the hero.', 'skapa'),
        ]
    ]
];