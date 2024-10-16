<?php
/**
* Default post template.
*
* @package Skapa
*/

get_header();
?>

<main id="main" class="main">
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                get_template_part( 'templates/partials/single-post' );
            }
        }
    ?>
</main>
<?php

get_footer();
