<?php
/**
 * Hero module ACF fields.
 * 
 * @package Skapa
 */

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
            'return_format' => 'id',
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
            'label' => __('Background color', 'skapa'),
            'name' => 'background_color',
            'type' => 'button_group',
            'instructions' => __('Select a color that will be used as the background for the hero.', 'skapa'),
            'choices' => [],
            'required' => 1,
            'default_value' => 'primary',
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
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'hero_text_color',
            'label' => __('Text color', 'skapa'),
            'name' => 'text_color',
            'type' => 'button_group',
            'instructions' => __('Select a color that will be used for the text in the hero.', 'skapa'),
            'conditional_logic' => [
                [
                    [
                        'field' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_type',
                        'operator' => '==',
                        'value' => 'image',
                    ]
                ]
            ],
            'default_value' => 'primary',
            'wrapper' => [
                'width' => '34'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'hero_overlay',
            'label' => __('Overlay', 'skapa'),
            'name' => 'overlay',
            'type' => 'true_false',
            'instructions' => __('Add an overlay to the hero to make the text more readable?', 'skapa'),
            'default_value' => 1,
            'wrapper' => [
                'width' => '33'
            ],
            'ui' => 1,
            'conditional_logic' => [
                [
                    [
                        'field' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_type',
                        'operator' => '==',
                        'value' => 'image',
                    ]
                ]
            ],
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_height',
            'label' => __('Height', 'skapa'),
            'name' => 'height',
            'type' => 'button_group',
            'instructions' => __('Select the height of the hero. A large hero is suitable for the front page, and a small hero is suitable for sub pages.', 'skapa'),
            'choices' => [
                'small' => __('Small', 'skapa'),
                'large' => __('Large', 'skapa'),
            ],
            'default_value' => 'large',
            'wrapper' => [
                'width' => '33'
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
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_button_primary',
            'label' => __('Primary button', 'skapa'),
            'name' => 'button_primary',
            'type' => 'link',
            'instructions' => __('Create a primary button for the hero.', 'skapa'),
            'wrapper' => [
                'width' => 50,
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_button_secondary',
            'label' => __('Secondary button', 'skapa'),
            'name' => 'button_secondary',
            'type' => 'link',
            'instructions' => __('Create a secondary button for the hero.', 'skapa'),
            'wrapper' => [
                'width' => 50,
            ]
        ]
    ]
];