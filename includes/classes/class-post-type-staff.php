<?php
/**
 * Creates a custom post type: Staff
 *
 * @package Skapa
 */

namespace Skapa;

class Post_Type_Staff extends Loader {
    /**
     * The post type name.
     */
    public static $post_type = 'staff';

	/**
	 * Add hooks and filters here.
	 *
	 * @return void
	 */
	public function init() : void {
		add_action('init', [$this, 'register_post_type'], 10);
	}

	/**
	 * Registers the post type.
	 *
	 * @return void
	 */
	public function register_post_type() : void {
		$singular_name = _x('Staff', 'post type singular name', 'skapa');
		$plural_name = _x('Staff', 'post type plural name', 'skapa');
		$labels = [
			'name' => $plural_name,
			'singular_name' => $singular_name,
			'add_new' => _x('Add new', 'education', 'skapa'),
			// translators: post type singular name
			'add_new_item' => sprintf(__('Add new %s', 'skapa'), $singular_name),
			// translators: post type singular name
			'edit_item' => sprintf(__('Edit %s', 'skapa'), $singular_name),
			// translators: post type singular name
			'new_item' => sprintf(__('New %s', 'skapa'), $singular_name),
			// translators: post type singular name
			'view_item' => sprintf(__('View %s', 'skapa'), $singular_name),
			// translators: post type plural name
			'view_items' => sprintf(__('View %s', 'skapa'), $plural_name),
			// translators: post type plural name
			'search_items' => sprintf(__('Search %s', 'skapa'), $plural_name),
			// translators: post type plural name
			'not_found' => sprintf(__('No %s found', 'skapa'), $plural_name),
			// translators: post type plural name
			'not_found_in_trash' => sprintf(__('No %s found in trash', 'skapa'), $plural_name),
			// translators: post type plural name
			'all_items' => sprintf(__('All %s', 'skapa'), $plural_name),
			// translators: post type singular name
			'archives' => sprintf(__('%s archive', 'skapa'), $singular_name),
			// translators: post type singular name
			'attributes' => sprintf(__('%s attributes', 'skapa'), $singular_name),
		];
		$args = [
			'name' => __('Staff', 'skapa'),
			'labels' => $labels,
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => false,
			'show_in_admin_bar' => true,
			'show_in_rest' => true,
			'menu_position' => 10,
			'menu_icon' => 'dashicons-universal-access',
			'supports' => [ 'title', 'thumbnail' ],
			'has_archive' => false,
			'delete_with_user' => false,
            'rewrite' => [
                'slug' => _x('staff', 'post type slug', 'skapa')
            ]
		];
		register_post_type(self::$post_type, $args);

        /**
         * Registration of ACF fields is called here rather than on the init() method.
         * This is to make sure the ACF fields are not registered until the post type
         * is registered.
         */
        self::register_acf_fields();
	}

    /**
     * Registers ACF fields for the post type.
     *
     * @return void
     */
    public static function register_acf_fields() : void {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group([
                'key' => 'group_staff_fields',
                'name' => 'staff_fields',
                'title' => __('Staff', 'skapa'),
                'fields' => [
                    [
                        'key' => 'staff_fields_content_tab',
                        'label' => __('Content', 'skapa'),
                        'type' => 'tab'
                    ],
                    [
                        'key' => 'staff_fields_pretty_title',
                        'label' => __('Name to display', 'skapa'),
                        'name' => 'pretty_title',
                        'type' => 'text',
                        'instructions' => __('The name to display on the website. If left blank, the name given in the top line will be used.', 'skapa'),
                        'wrapper' => [
                            'width' => '50'
                        ]
                    ],
                    [
                        'key' => 'staff_fields_position',
                        'label' => __('Position', 'skapa'),
                        'name' => 'position',
                        'type' => 'text',
                        'instructions' => __('The position of the staff member.', 'skapa'),
                        'wrapper' => [
                            'width' => '50'
                        ]
                    ],
                    [
                        'key' => 'staff_fields_description',
                        'label' => __('Description', 'skapa'),
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 6,
                        'new_lines' => 'br'
                    ]
                ],
                'location' => [
                    [
                        [
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => self::$post_type,
                        ]
                    ]
                ]
            ]);
        }
    }
}
