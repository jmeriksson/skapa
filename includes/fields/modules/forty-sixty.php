<?php
/**
 * Forty sixty module ACF fields.
 * 
 * @package Skapa
 */

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty',
    'label' => esc_html__('Forty sixty', 'skapa'),
    'name' => 'forty_sixty',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'forty_sixty_content_tab',
            'label' => esc_html__('Content', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_heading',
            'label' => esc_html__('Heading', 'skapa'),
            'name' => 'heading',
            'type' => 'text',
            'instructions' => esc_html__('Enter the heading for this module.', 'skapa'),
            'required' => 1,
            'wrapper' => [
                'width' => '70'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_heading_size',
            'label' => esc_html__('Heading size', 'skapa'),
            'name' => 'heading_size',
            'type' => 'button_group',
            'instructions' => esc_html__('Select the size of the heading for this module. Note that the H1 size should only be used once per page.', 'skapa'),
            'required' => 1,
            'choices' => [
                'h1' => esc_html__('H1', 'skapa'),
                'h2' => esc_html__('H2', 'skapa'),
                'h3' => esc_html__('H3', 'skapa'),
            ],
            'default_value' => 'h2',
            'wrapper' => [
                'width' => '30'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_wysiwyg',
            'label' => esc_html__('Text', 'skapa'),
            'name' => 'wysiwyg',
            'type' => 'wysiwyg',
            'instructions' => esc_html__('Enter the text content for this module.', 'skapa'),
            'required' => 0,
            'media_upload' => 0,
            'delay' => 1,
            'tabs' => 'all',
            'toolbar' => 'full',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_settings_tab',
            'label' => esc_html__('Settings', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_background_color',
            'type' => 'clone',
            'clone' => [
                'group_module_background_color'
            ],
        ]
    ]
];
