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

    public static function register_acf_groups() : void {
        if ( function_exists('acf_add_local_field_group') ) {
            acf_add_local_field_group( self::page_fields() );
        }
    }

    public static function page_fields() : array {
        $fields = [
            [
                'key' => 'group_page_modules',
				'name' => 'modules',
				'label' => __('Modules', 'skapa'),
				'type' => 'flexible_content',
                'layouts' => [
                    'test' => [
                        'key' => 'group_page_modules_test',
                        'name' => 'test',
                        'label' => __('Test', 'skapa'),
                        'display' => 'block',
                        'sub_fields' => [
                            [
                                'key' => 'field_test',
                                'name' => 'test',
                                'label' => __('Test', 'skapa'),
                                'type' => 'text',
                            ]
                        ]
                    ]
                ]
            ]
        ];
        return [
            'key' => 'group_page',
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
}