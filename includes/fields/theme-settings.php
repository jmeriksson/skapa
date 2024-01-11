<?php
/**
 * Fields for the theme settings page.
 * 
 * @package Skapa 
 */

return [
    [
        'key' => 'group_theme_settings_general',
        'label' => __('General', 'skapa'),
        'type' => 'tab'
    ],
    [
        'key' => 'field_theme_settings_general_logo',
        'label' => __('Logo', 'skapa'),
        'name' => 'logo',
        'type' => 'image',
        'instructions' => __('Upload a logo for the site.', 'skapa'),
        'return_format' => 'array',
        'preview_size' => 'medium',
    ]
];
