<?php
/**
 * This class registers fields for ACF.
 *
 * @package Skapa
 */

namespace Skapa;

class ACF_Fields extends Loader {
    /**
     * Add hooks and filters here.
     *
     * @return void
     */
    public function init() : void {
        add_action('acf/init', [ $this, 'add_options_page' ]);
        add_action('acf/init', [ $this, 'register_acf_groups' ]);
        add_filter('acf/load_field/name=background_color', [ $this, 'register_theme_colors' ], 10, 1);
        add_filter('acf/load_field/name=text_color', [ $this, 'register_theme_colors' ], 10, 1);
    }

    /**
     * Adds an options page in the admin area.
     *
     * @return void
     */
    public function add_options_page() : void {
        if (function_exists('acf_add_options_page')) {
			$settings = [
				'page_title' => __('Theme settings', 'skapa'),
				'menu_title' => __('Theme settings', 'skapa'),
				'menu_slug' => 'theme-settings',
				'icon_url' => 'dashicons-admin-site-alt3',
			];
			acf_add_options_page($settings);
		}
    }

    /**
     * Registers ACF field groups.
     * 
     * @return void
     */
    public function register_acf_groups() : void {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group(self::page_fields());
            acf_add_local_field_group(self::theme_settings_fields());
            acf_add_local_field_group(self::module_background_color_clone());
        }
    }

    /**
     * Returns an array for setting up the page field group.
     * 
     * @return array
     */
    public static function page_fields() : array {
        define('SKAPA_PAGE_PREFIX', 'group_page_');
        $fields = include_once(get_stylesheet_directory() . '/includes/fields/page-modules.php');

        return [
            'key' => SKAPA_PAGE_PREFIX,
            'title' => __('Page fields', 'skapa'),
            'fields' => $fields,
            'location' => [
				[
					[
						'param' => 'post_template',
						'operator' => '==',
						'value' => 'default',
					],
				],
			],
			'hide_on_screen' => [
				'the_content',
			],
			'active' => true,
        ];
    }

    /**
     * Returns an array for setting up the theme settings field group.
     * 
     * @return array
     */
    public static function theme_settings_fields() : array {
        $fields = include_once(get_stylesheet_directory() . '/includes/fields/theme-settings.php');

        return [
            'key' => 'group_theme_settings',
            'title' => __('Theme settings', 'skapa'),
            'fields' => $fields,
            'location' => [
                [
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'theme-settings',
                    ],
                ]
            ]
        ];
    }

    /**
     * Registers theme colors for ACF fields.
     * 
     * @param array
     */
    public function register_theme_colors(array $field) : array {
        $field['choices'] = [
            'primary' => __('Primary', 'skapa'),
            'secondary' => __('Secondary', 'skapa')
        ];

        return $field;
    }

    /**
     * Returns an array representing the background color clone field group.
     * 
     * @return array
     */
    public static function module_background_color_clone() : array {
        $fields = [
            [
                'key' => SKAPA_PAGE_MODULES_PREFIX . 'background_color',
                'label' => __('Background color', 'skapa'),
                'name' => 'background_color',
                'type' => 'button_group',
                'choices' => [
                    'primary' => __('Primary', 'skapa'),
                    'secondary' => __('Secondary', 'skapa')
                ]
            ]
        ];

        return [
            'key' => 'group_module_background_color',
            'active' => false,
            'fields' => $fields
        ];
    }
}