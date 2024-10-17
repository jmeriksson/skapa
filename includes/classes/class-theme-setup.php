<?php
/**
 * Handles the basic setup of the theme.
 *
 * @package Skapa
 */

namespace Skapa;

class Theme_Setup extends Loader {
	/**
	 * Add hooks and filters here.
	 *
	 * @return void
	 */
	public function init() : void {
        add_action('admin_notices', [ $this, 'notice_theme_dependencies' ]);
		add_action('after_setup_theme', [ $this, 'register_menus' ]);
		add_action('after_setup_theme', [ $this, 'theme_supports' ]);
		add_action('wp_enqueue_scripts', [ $this, 'add_theme_scripts_and_styles' ]);
        add_action('init', [ $this, 'add_editor_styles']);
        add_action('after_setup_theme', [ $this, 'load_textdomain']);
        add_filter('nav_menu_link_attributes', [ $this, 'add_anchor_class' ], 10, 3);
	}

    /**
     * Displays a notice if required plugins are not installed.
     *
     * @return void
     */
    public function notice_theme_dependencies() : void {
        if (! class_exists('ACF')) {
            echo '<div class="error"><p>' . esc_html__( 'Skapa theme requires Advanced Custom Fields Pro plugin to be installed and activated.', 'skapa' ) . '</p></div>';
        }
        if (! class_exists('Classic_Editor')) {
            echo '<div class="error"><p>' . esc_html__( 'Skapa theme requires Classic Editor plugin to be installed and activated.', 'skapa' ) . '</p></div>';
        }
    }

	/**
	 * Registers theme menues.
	 *
	 * @return void
	 */
	public function register_menus() : void {
		register_nav_menus(
			[
				'primary_menu' => esc_html__( 'Primary Menu', 'skapa' ),
                'footer_menu' => esc_html__('Footer menu', 'skapa')
			]
		);
	}

	/**
	 * Handles adding theme supports.
	 *
	 * @return void
	 */
	public function theme_supports() {
		add_theme_support( 'post-thumbnails' );
	}

	/**
	 * Handles theme scripts and styles.
	 *
	 * @return void
	 */
	public function add_theme_scripts_and_styles() : void {
		$style_modified  = gmdate( 'YmdHi', filemtime( get_template_directory() . '/assets/css/skapa.css' ) );
		$script_modified = gmdate( 'YmdHi', filemtime( get_template_directory() . '/assets/javascript/skapa.js' ) );

		// Enqueue the style.css file
		wp_enqueue_style( 'style', get_stylesheet_uri(), [], '1.0' );

		// Enqueue theme styles from assets directory
		wp_enqueue_style( 'skapa_styles', get_template_directory_uri() . '/assets/css/skapa.css', [], $style_modified );

		// Enqueue main scripts from assets directory
		wp_enqueue_script( 'skapa_scripts', get_template_directory_uri() . '/assets/javascript/skapa.js', [], $script_modified, true );
	}

    public function add_editor_styles() {
        add_editor_style(get_template_directory_uri() . '/assets/css/editor-styles.css');
    }

    /**
     * Loads the theme textdomain.
     *
     * @return void
     */
    public function load_textdomain() {
        load_theme_textdomain('skapa', get_template_directory() . '/languages');
    }

    /**
     * This filter adds a class to the anchor tag in the menu.
     * The class is added if the menu item has the property add_anchor_class.
     *
     * @param Array $atts
     * @param WP_Post $item
     * @param stdClass $args
     * @return void
     */
    public function add_anchor_class($atts, $item, $args) {
        if (property_exists($args, 'add_anchor_class')) {
            $atts['class'] = $args->add_anchor_class;
        }
        return $atts;
    }
}
