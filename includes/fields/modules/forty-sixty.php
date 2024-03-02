<?php
/**
 * Forty sixty module ACF fields.
 * 
 * @package Skapa
 */

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty',
    'label' => __('Forty sixty', 'skapa'),
    'name' => 'forty_sixty',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX. 'forty_sixty_content_tab',
            'label' => __('Content', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_heading',
            'label' => __('Heading', 'skapa'),
            'name' => 'heading',
            'type' => 'text',
            'instructions' => __('Enter the heading for this module.', 'skapa'),
            'required' => 1,
            'wrapper' => [
                'width' => '70'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_heading_size',
            'label' => __('Heading size', 'skapa'),
            'name' => 'heading_size',
            'type' => 'button_group',
            'instructions' => __('Select the size of the heading for this module. Note that the H1 size should only be used once per page.', 'skapa'),
            'required' => 1,
            'choices' => [
                'h1' => __('H1', 'skapa'),
                'h2' => __('H2', 'skapa'),
                'h3' => __('H3', 'skapa'),
            ],
            'default_value' => 'h2',
            'wrapper' => [
                'width' => '30'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_wysiwyg',
            'label' => __('Text', 'skapa'),
            'name' => 'wysiwyg',
            'type' => 'wysiwyg',
            'instructions' => __('Enter the text content for this module.', 'skapa'),
            'required' => 0,
            'media_upload' => 0,
            'delay' => 1,
            'tabs' => 'all',
            'toolbar' => 'full',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'forty_sixty_settings_tab',
            'label' => __('Settings', 'skapa'),
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
