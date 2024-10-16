<?php
/**
 * Text and image module ACF fields.
 * 
 * @package Skapa
 */

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image',
    'label' => esc_html__('Text and image', 'skapa'),
    'name' => 'text_and_image',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_content_tab',
            'label' => esc_html__('Content', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_layout',
            'label' => esc_html__('Layout', 'skapa'),
            'name' => 'layout',
            'type' => 'button_group',
            'instructions' => esc_html__('Select the layout of this module.', 'skapa'),
            'required' => 1,
            'choices' => [
                'text-left' => esc_html__('Text to the left', 'skapa'),
                'text-right' => esc_html__('Text to the right', 'skapa'),
            ],
            'wrapper' => [
                'width' => '50'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_image',
            'label' => esc_html__('Image', 'skapa'),
            'name' => 'image',
            'type' => 'image',
            'instructions' => esc_html__('Select an image to display.', 'skapa'),
            'required' => 1,
            'return_format' => 'id',
            'preview_size' => 'medium',
            'wrapper' => [
                'width' => '50'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_heading',
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
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_heading_size',
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
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_wysiwyg',
            'label' => esc_html__('Text', 'skapa'),
            'name' => 'wysiwyg',
            'type' => 'wysiwyg',
            'media_upload' => 0,
            'delay' => 1,
            'tabs' => 'all',
            'toolbar' => 'full',
            'instructions' => esc_html__('Enter the text content for this module.', 'skapa'),
            'required' => 0,
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_button',
            'label' => esc_html__('Button', 'skapa'),
            'name' => 'button',
            'type' => 'link',
            'instructions' => esc_html__('Add a button to this module (optional).', 'skapa'),
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_settings_tab',
            'label' => esc_html__('Settings', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'text_and_image_background_color',
            'type' => 'clone',
            'clone' => [
                'group_module_background_color'
            ],
        ]
    ]
];
