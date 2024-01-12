<?php
/**
 * Holds all classes.
 *
 * @package Skapa
 */

namespace Skapa;

require get_template_directory() . '/includes/classes/class-loader.php';
require get_template_directory() . '/includes/classes/class-theme-setup.php';
require get_template_directory() . '/includes/classes/class-acf-fields.php';
require get_template_directory() . '/includes/classes/class-footer.php';

( new Theme_Setup() )->init();
( new ACF_Fields() )->init();
( new Footer() )->init();
