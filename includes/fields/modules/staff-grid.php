<?php
/**
 * Staff Grid module ACF fields.
 * 
 * @package Skapa
 */

return [
    'key' => SKAPA_PAGE_MODULES_PREFIX . 'staff_grid',
    'label' => __('Staff grid', 'skapa'),
    'name' => 'staff_grid',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'staff_grid_content_tab',
            'label' => __('Content', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'staff_grid_heading',
            'label' => __('Heading', 'skapa'),
            'name' => 'heading',
            'type' => 'text',
            'instructions' => __('Enter the heading for this module.', 'skapa'),
            'wrapper' => [
                'width' => '70'
            ]
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'staff_grid_heading_size',
            'label' => __('Heading size', 'skapa'),
            'name' => 'heading_size',
            'type' => 'button_group',
            'instructions' => __('Select the size of the heading for this module. Note that the H1 size should only be used once per page.', 'skapa'),
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
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'staff_grid_staff_members',
            'label' => __('Staff members', 'skapa'),
            'name' => 'staff_members',
            'type' => 'relationship',
            'instructions' => __('Select the staff members to display in this module.', 'skapa'),
            'post_type' => ['staff'],
            'filters' => ['search'],
            'min' => 1,
            'max' => 0,
            'return_format' => 'object',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'staff_grid_settings_tab',
            'label' => __('Settings', 'skapa'),
            'type' => 'tab',
        ],
        [
            'key' => SKAPA_PAGE_MODULES_PREFIX . 'staff_grid_background_color',
            'type' => 'clone',
            'clone' => [
                'group_module_background_color'
            ],
        ]
    ]
];
