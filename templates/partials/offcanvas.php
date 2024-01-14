<?php
/**
 * Offcanvas
 * 
 * @package Skapa
 */

?>

<div class="absolute h-screen w-11/12 bg-white top-0 -right-full group-[.offcanvas-is-open]:right-0 py-2 px-4 transition-all">
    <div class="flex flex-col">
        <button
            id="js-offcanvas-close" 
            class="self-end flex flex-col align-center justify-center w-12 h-12 p-2"
            aria-label="<?php echo esc_attr__('Close mobile menu', 'skapa'); ?>">
            <span class="bg-black block w-full h-[3px] rounded-sm rotate-45 translate-y-[1.5px]"></span>
            <span class="bg-black block w-full h-[3px] rounded-sm -rotate-45 -translate-y-[1.5px]"></span>
        </button>
        <nav>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary_menu',
                    'container' => '',
                    'menu_class' => 'flex flex-col',
                    'menu_id' => 'js-offcanvas-menu',
                    'add_anchor_class' => 'block w-full py-2 text-center hover:underline js-mobile-menu-item'
                )
            );
            ?>
        </nav>
    </div>
</div>