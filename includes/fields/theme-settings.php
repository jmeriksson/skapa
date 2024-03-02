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
        'key' => 'group_theme_settings_general_logo',
        'label' => __('Logo', 'skapa'),
        'name' => 'logo',
        'type' => 'image',
        'instructions' => __('Upload a logo for the site.', 'skapa'),
        'return_format' => 'array',
        'preview_size' => 'medium',
    ],
    [
        'key' => 'group_theme_settings_footer',
        'label' => __('Footer', 'skapa'),
        'type' => 'tab'
    ],
    [
        'key' => 'group_theme_settings_footer_background_color',
        'label' => __('Footer color', 'skapa'),
        'name' => 'background_color',
        'type' => 'button_group',
        'default_value' => 'primary',
        'allow_null' => 0,
    ],
    [
        'key' => 'group_theme_settings_footer_working_hours_display',
        'label' => __('Display working hours in the footer?', 'skapa'),
        'name' => 'working_hours_display',
        'type' => 'true_false',
        'default_value' => false,
        'ui' => true,
    ],
    [
        'key' => 'group_theme_settings_footer_working_hours_heading',
        'label' => __('Working hours heading', 'skapa'),
        'name' => 'working_hours_heading',
        'type' => 'text',
        'conditional_logic' => [
            [
                [
                    'field' => 'group_theme_settings_footer_working_hours_display',
                    'operator' => '==',
                    'value' => 1,
                ]
            ]
        ]
    ],
    [
        'key' => 'group_theme_settings_footer_working_hours',
        'label' => __('Working hours', 'skapa'),
        'name' => 'working_hours',
        'type' => 'repeater',
        'conditional_logic' => [
            [
                [
                    'field' => 'group_theme_settings_footer_working_hours_display',
                    'operator' => '==',
                    'value' => 1,
                ]
            ]
        ],
        'sub_fields' => [
            [
                'key' => 'group_theme_settings_footer_working_hours_label',
                'label' => __('Label', 'skapa'),
                'name' => 'label',
                'type' => 'text',
                'wrapper' => [
                    'width' => 50
                ]
            ],
            [
                'key' => 'group_theme_settings_footer_working_hours_value',
                'label' => __('Value', 'skapa'),
                'name' => 'value',
                'type' => 'text',
                'wrapper' => [
                    'width' => 50
                ]
            ],
        ]
    ],
    [
        'key' => 'group_theme_settings_footer_contact_details_display',
        'label' => __('Display contact details in the footer?', 'skapa'),
        'name' => 'contact_details_display',
        'type' => 'true_false',
        'default_value' => false,
        'ui' => true,
    ],
    [
        'key' => 'group_theme_settings_footer_contact_details_heading',
        'label' => __('Contact details heading', 'skapa'),
        'name' => 'contact_details_heading',
        'type' => 'text',
        'conditional_logic' => [
            [
                [
                    'field' => 'group_theme_settings_footer_contact_details_display',
                    'operator' => '==',
                    'value' => 1,
                ]
            ]
        ]
    ],
    [
        'key' => 'group_theme_settings_footer_contact_details',
        'label' => __('Contact details', 'skapa'),
        'name' => 'contact_details',
        'type' => 'flexible_content',
        'button_label' => __('Add contact detail', 'skapa'),
        'layouts' => [
            'phone_number' => [
                'key' => 'group_theme_settings_footer_contact_details_phone_number',
                'label' => __('Phone number', 'skapa'),
                'name' => 'phone_number',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_phone_number_label',
                        'label' => __('Phone number label', 'skapa'),
                        'name' => 'label',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                        'instructions' => __('Enter the phone number they way you want it to be displayed on your site.', 'skapa'),
                        'placeholder' => '0123 - 45 67 89'
                    ],
                    [
                        'key' => 'group_theme_settings_footer_contact_details_phone_number_value',
                        'label' => __('Phone number value', 'skapa'),
                        'name' => 'value',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                        'instructions' => __('Enter the phone number without any spaces or special characters.', 'skapa'),
                        'placeholder' => '0123456789',
                        'required' => 1
                    ],
                ]
            ],
            'email' => [
                'key' => 'group_theme_settings_footer_contact_details_email',
                'label' => __('Email', 'skapa'),
                'name' => 'email',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_email_value',
                        'label' => __('Email address', 'skapa'),
                        'name' => 'value',
                        'type' => 'email',
                        'required' => 1
                    ]
                ]
            ],
            'physical_address' => [
                'key' => 'group_theme_settings_footer_contact_details_physical_address',
                'label' => __('Physical address', 'skapa'),
                'name' => 'physical_address',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_physical_address_rows',
                        'label' => __('Address rows', 'skapa'),
                        'name' => 'rows',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'key' => 'group_theme_settings_footer_contact_details_physical_address_row',
                                'label' => __('Address row', 'skapa'),
                                'name' => 'row',
                                'type' => 'text',
                                'required' => 1
                            ]
                        ],
                        'min' => 1,
                    ]
                ]
            ],
            'social_media' => [
                'key' => 'group_theme_settings_footer_contact_details_social_media',
                'label' => __('Social media', 'skapa'),
                'name' => 'social_media',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_social_media_links',
                        'label' => __('Social media links', 'skapa'),
                        'name' => 'links',
                        'type' => 'repeater',
                        'button_label' => __('Add social media', 'skapa'),
                        'sub_fields' => [
                            [
                                'key' => 'group_theme_settings_footer_contact_details_social_media_links_platform',
                                'label' => __('Platform', 'skapa'),
                                'name' => 'platform',
                                'type' => 'select',
                                'choices' => [
                                    'facebook' => __('Facebook', 'skapa'),
                                    'instagram' => __('Instagram', 'skapa'),
                                    'linkedin' => __('LinkedIn', 'skapa'),
                                    'pinterest' => __('Pinterest', 'skapa'),
                                    'tiktok' => __('TikTok', 'skapa'),
                                    'viber' => __('Viber', 'skapa'),
                                    'vimeo' => __('Vimeo', 'skapa'),
                                    'whatsapp' => __('WhatsApp', 'skapa'),
                                    'youtube' => __('YouTube', 'skapa'),
                                    'x' => __('X', 'skapa')
                                ],
                                'allow_null' => 0,
                                'ui' => 1,
                            ],
                            [
                                'key' => 'group_theme_settings_footer_contact_details_social_media_links_url',
                                'label' => __('URL', 'skapa'),
                                'name' => 'url',
                                'type' => 'url',
                                'required' => 1
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'conditional_logic' => [
            [
                [
                    'field' => 'group_theme_settings_footer_contact_details_display',
                    'operator' => '==',
                    'value' => 1,
                ]
            ]
        ]
    ]
];
