<?php
/**
 * Fields for the page module group.
 */

define('SKAPA_PAGE_MODULES_PREFIX', SKAPA_PAGE_PREFIX . 'modules_');

if (! function_exists( 'skapa_get_page_module_layouts' )) {
    /**
     * Loops through all PHP files in the modules directory and returns an array of layouts from them.
     */
    function skapa_get_page_module_layouts() {
        $layouts = [];
        $modules_directory = get_stylesheet_directory() . '/includes/fields/modules';
        $modules = glob( $modules_directory . '/*.php' );
    
        foreach ($modules as $module) {
            $name = str_replace('-', '_', basename($module, '.php'));
            $layouts[$name] = include_once $module;
        }
    
        return $layouts;
    }
}

return [
    [
        'key' => SKAPA_PAGE_MODULES_PREFIX,
        'name' => 'modules',
        'label' => esc_html__('Modules', 'skapa'),
        'type' => 'flexible_content',
        'layouts' => skapa_get_page_module_layouts(),
        'button_label' => esc_html__('Add module', 'skapa'),
    ]
];
