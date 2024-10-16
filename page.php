<?php
/**
* Default page template.
*
* @package Skapa
*/

get_header();
if ( function_exists( 'get_field' ) ) {
    $modules = get_field( 'modules' );
} else {
    $modules = [];
}

?>

<main id="main" class="main">
    <?php 
    if ( $modules ) {
        foreach ( $modules as $module ) {
            $template_name = 'templates/modules/' . str_replace( '_', '-', $module['acf_fc_layout'] );
            get_template_part( $template_name, '', $module );
        }
    }
    ?>
</main>
<?php

get_footer();
