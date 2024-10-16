<?php
/**
 * Hero module ACF fields.
 * 
 * @package Skapa
 */

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'hero',
    'label' => esc_html__('Hero', 'skapa'),
    'name' => 'hero',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_type',
            'label' => esc_html__('Background type', 'skapa'),
            'name' => 'background_type',
            'type' => 'button_group',
            'instructions' => esc_html__('Select the type of background you want to use for the hero.', 'skapa'),
            'choices' => [
                'image' => esc_html__('Image', 'skapa'),
                'color' => esc_html__('Color', 'skapa'),
            ],
            'default_value' => 'image',
            'wrapper' => [
                'width' => '50'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_background_image',
            'label' => esc_html__('Image', 'skapa'),
            'name' => 'background_image',
            'type' => 'image',
            'instructions' => esc_html__('Select a big image that will be used as the background for the hero.', 'skapa'),
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
            'label' => esc_html__('Background color', 'skapa'),
            'name' => 'background_color',
            'type' => 'button_group',
            'instructions' => esc_html__('Select a color that will be used as the background for the hero.', 'skapa'),
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
            'label' => esc_html__('Text color', 'skapa'),
            'name' => 'text_color',
            'type' => 'button_group',
            'instructions' => esc_html__('Select a color that will be used for the text in the hero.', 'skapa'),
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
            'label' => esc_html__('Overlay', 'skapa'),
            'name' => 'overlay',
            'type' => 'true_false',
            'instructions' => esc_html__('Add an overlay to the hero to make the text more readable?', 'skapa'),
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
            'label' => esc_html__('Height', 'skapa'),
            'name' => 'height',
            'type' => 'button_group',
            'instructions' => esc_html__('Select the height of the hero. A large hero is suitable for the front page, and a small hero is suitable for sub pages.', 'skapa'),
            'choices' => [
                'small' => esc_html__('Small', 'skapa'),
                'large' => esc_html__('Large', 'skapa'),
            ],
            'default_value' => 'large',
            'wrapper' => [
                'width' => '33'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_heading',
            'label' => esc_html__('Heading', 'skapa'),
            'name' => 'heading',
            'type' => 'text',
            'instructions' => esc_html__('Create a heading for the hero.', 'skapa'),
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_subheading',
            'label' => esc_html__('Subheading', 'skapa'),
            'name' => 'subheading',
            'type' => 'text',
            'instructions' => esc_html__('Create a subheading for the hero.', 'skapa'),
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_button_primary',
            'label' => esc_html__('Primary button', 'skapa'),
            'name' => 'button_primary',
            'type' => 'link',
            'instructions' => esc_html__('Create a primary button for the hero.', 'skapa'),
            'wrapper' => [
                'width' => 50,
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'hero_button_secondary',
            'label' => esc_html__('Secondary button', 'skapa'),
            'name' => 'button_secondary',
            'type' => 'link',
            'instructions' => esc_html__('Create a secondary button for the hero.', 'skapa'),
            'wrapper' => [
                'width' => 50,
            ]
        ]
    ]
];