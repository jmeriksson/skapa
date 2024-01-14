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
        add_action( 'acf/init', [ $this, 'register_acf_groups' ] );
        add_filter('acf/load_field/name=background_color', [ $this, 'register_background_colors' ], 10, 1);
    }

    /**
     * Adds an options page in the admin area.
     *
     * @return void
     */
    public function add_options_page() : void {
        if ( function_exists( 'acf_add_options_page' ) ) {
			$settings = [
				'page_title' => __('Theme settings', 'skapa'),
				'menu_title' => __('Theme settings', 'skapa'),
				'menu_slug' => 'theme-settings',
				'icon_url' => 'dashicons-admin-site-alt3',
			];
			acf_add_options_page( $settings );
		}
    }

    public function register_acf_groups() : void {
        if ( function_exists('acf_add_local_field_group') ) {
            acf_add_local_field_group( self::page_fields() );
            acf_add_local_field_group( self::theme_settings_fields() );
        }
    }

    public static function page_fields() : array {
        define('SKAPA_PAGE_PREFIX', 'group_page_');
        $fields = include_once( get_stylesheet_directory() . '/includes/fields/page-modules.php' );

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

    public static function theme_settings_fields() : array {
        $fields = include_once( get_stylesheet_directory() . '/includes/fields/theme-settings.php' );

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

    public function register_background_colors( array $field ) : array {
        $field['choices'] = [
            'white' => __('White', 'skapa'),
            'black' => __('Black', 'skapa')
        ];

        return $field;
    }
}