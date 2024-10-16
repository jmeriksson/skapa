<?php
/**
 * Fields for the theme settings page.
 * 
 * @package Skapa 
 */

return [
    [
        'key' => 'group_theme_settings_general',
        'label' => esc_html__('General', 'skapa'),
        'type' => 'tab'
    ],
    [
        'key' => 'group_theme_settings_general_logo',
        'label' => esc_html__('Logo', 'skapa'),
        'name' => 'logo',
        'type' => 'image',
        'instructions' => esc_html__('Upload a logo for the site.', 'skapa'),
        'return_format' => 'array',
        'preview_size' => 'medium',
    ],
    [
        'key' => 'group_theme_settings_footer',
        'label' => esc_html__('Footer', 'skapa'),
        'type' => 'tab'
    ],
    [
        'key' => 'group_theme_settings_footer_background_color',
        'label' => esc_html__('Footer color', 'skapa'),
        'name' => 'background_color',
        'type' => 'button_group',
        'default_value' => 'primary',
        'allow_null' => 0,
    ],
    [
        'key' => 'group_theme_settings_footer_working_hours_display',
        'label' => esc_html__('Display working hours in the footer?', 'skapa'),
        'name' => 'working_hours_display',
        'type' => 'true_false',
        'default_value' => false,
        'ui' => true,
        'wrapper' => [
            'width' => 50
        ],
    ],
    [
        'key' => 'group_theme_settings_footer_contact_details_display',
        'label' => esc_html__('Display contact details in the footer?', 'skapa'),
        'name' => 'contact_details_display',
        'type' => 'true_false',
        'default_value' => false,
        'ui' => true,
        'wrapper' => [
            'width' => 50
        ],
    ],
    [
        'key' => 'group_theme_settings_footer_working_hours_heading',
        'label' => esc_html__('Working hours heading', 'skapa'),
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
        'label' => esc_html__('Working hours', 'skapa'),
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
                'label' => esc_html__('Label', 'skapa'),
                'name' => 'label',
                'type' => 'text',
                'wrapper' => [
                    'width' => 50
                ]
            ],
            [
                'key' => 'group_theme_settings_footer_working_hours_value',
                'label' => esc_html__('Value', 'skapa'),
                'name' => 'value',
                'type' => 'text',
                'wrapper' => [
                    'width' => 50
                ]
            ],
        ]
    ],
    [
        'key' => 'group_theme_settings_footer_contact_details_heading',
        'label' => esc_html__('Contact details heading', 'skapa'),
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
        'label' => esc_html__('Contact details', 'skapa'),
        'name' => 'contact_details',
        'type' => 'flexible_content',
        'button_label' => esc_html__('Add contact detail', 'skapa'),
        'layouts' => [
            'phone_number' => [
                'key' => 'group_theme_settings_footer_contact_details_phone_number',
                'label' => esc_html__('Phone number', 'skapa'),
                'name' => 'phone_number',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_phone_number_label',
                        'label' => esc_html__('Phone number label', 'skapa'),
                        'name' => 'label',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                        'instructions' => esc_html__('Enter the phone number they way you want it to be displayed on your site.', 'skapa'),
                        'placeholder' => '0123 - 45 67 89'
                    ],
                    [
                        'key' => 'group_theme_settings_footer_contact_details_phone_number_value',
                        'label' => esc_html__('Phone number value', 'skapa'),
                        'name' => 'value',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ],
                        'instructions' => esc_html__('Enter the phone number without any spaces or special characters.', 'skapa'),
                        'placeholder' => '0123456789',
                        'required' => 1
                    ],
                ]
            ],
            'email' => [
                'key' => 'group_theme_settings_footer_contact_details_email',
                'label' => esc_html__('Email', 'skapa'),
                'name' => 'email',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_email_value',
                        'label' => esc_html__('Email address', 'skapa'),
                        'name' => 'value',
                        'type' => 'email',
                        'required' => 1
                    ]
                ]
            ],
            'physical_address' => [
                'key' => 'group_theme_settings_footer_contact_details_physical_address',
                'label' => esc_html__('Physical address', 'skapa'),
                'name' => 'physical_address',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_physical_address_rows',
                        'label' => esc_html__('Address rows', 'skapa'),
                        'name' => 'rows',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'key' => 'group_theme_settings_footer_contact_details_physical_address_row',
                                'label' => esc_html__('Address row', 'skapa'),
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
                'label' => esc_html__('Social media', 'skapa'),
                'name' => 'social_media',
                'display' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'group_theme_settings_footer_contact_details_social_media_links',
                        'label' => esc_html__('Social media links', 'skapa'),
                        'name' => 'links',
                        'type' => 'repeater',
                        'button_label' => esc_html__('Add social media', 'skapa'),
                        'sub_fields' => [
                            [
                                'key' => 'group_theme_settings_footer_contact_details_social_media_links_platform',
                                'label' => esc_html__('Platform', 'skapa'),
                                'name' => 'platform',
                                'type' => 'select',
                                'choices' => [
                                    'facebook' => esc_html__('Facebook', 'skapa'),
                                    'instagram' => esc_html__('Instagram', 'skapa'),
                                    'linkedin' => esc_html__('LinkedIn', 'skapa'),
                                    'pinterest' => esc_html__('Pinterest', 'skapa'),
                                    'tiktok' => esc_html__('TikTok', 'skapa'),
                                    'viber' => esc_html__('Viber', 'skapa'),
                                    'vimeo' => esc_html__('Vimeo', 'skapa'),
                                    'whatsapp' => esc_html__('WhatsApp', 'skapa'),
                                    'youtube' => esc_html__('YouTube', 'skapa'),
                                    'x' => esc_html__('X', 'skapa')
                                ],
                                'allow_null' => 0,
                                'ui' => 1,
                            ],
                            [
                                'key' => 'group_theme_settings_footer_contact_details_social_media_links_url',
                                'label' => esc_html__('URL', 'skapa'),
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
    ],
    [
        'key' => 'group_theme_settings_footer_bottom',
        'label' => esc_html__('Footer bottom', 'skapa'),
        'name' => 'footer_bottom',
        'instructions' => esc_html__('This content will be displayed at the bottom of the footer.', 'skapa'),
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'tabs' => 'all',
    ],
    [
        'key' => 'group_theme_settings_404_tab',
        'label' => esc_html__('404', 'skapa'),
        'type' => 'tab'
    ],
    [
        'key' => 'group_theme_settings_404_heading',
        'label' => esc_html__('Heading', 'skapa'),
        'name' => '404_heading',
        'type' => 'text',
        'default_value' => esc_html__('404 - Page not found', 'skapa')
    ],
    [
        'key' => 'group_theme_settings_404_content',
        'label' => esc_html__('Content', 'skapa'),
        'name' => '404_content',
        'type' => 'wysiwyg',
        'default_value' => esc_html__('The page you are looking for does not exist.', 'skapa'),
        'media_upload' => 0,
        'tabs' => 'all',
    ]
];
