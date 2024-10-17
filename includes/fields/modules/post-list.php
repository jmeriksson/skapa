<?php
/**
 * Post List module ACF fields.
 * 
 * @package Skapa
 */

 return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'post_list',
    'label' => esc_html__('Post list', 'skapa'),
    'name' => 'post_list',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'post_list_content_tab',
            'label' => esc_html__('Content', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'post_list_heading',
            'label' => esc_html__('Heading', 'skapa'),
            'name' => 'heading',
            'type' => 'text',
            'instructions' => esc_html__('Enter the heading for this module.', 'skapa'),
            'wrapper' => [
                'width' => '70'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'post_list_heading_size',
            'label' => esc_html__('Heading size', 'skapa'),
            'name' => 'heading_size',
            'type' => 'button_group',
            'instructions' => esc_html__('Select the size of the heading for this module. Note that the H1 size should only be used once per page.', 'skapa'),
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
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'post_list_posts',
            'label' => esc_html__('Posts', 'skapa'),
            'name' => 'posts',
            'type' => 'relationship',
            'instructions' => esc_html__('Select the posts to display in this module.', 'skapa'),
            'post_type' => ['post'],
            'filters' => ['search'],
            'min' => 1,
            'max' => 0,
            'return_format' => 'object',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'post_list_settings_tab',
            'label' => esc_html__('Settings', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'post_list_background_color',
            'type' => 'clone',
            'clone' => [
                'group_module_background_color'
            ],
        ]
    ]
];
