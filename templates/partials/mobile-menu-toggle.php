<?php
/**
 * Template for displaying the mobile menu toggle button.
 * 
 * @package Skapa
 */

?>

<button
    id="js-mobile-menu-toggle"
    aria-label="<?php echo esc_attr__('Open mobile menu', 'skapa'); ?>"
    aria-controls="offcanvas-menu"
    aria-expanded="false"
    class="flex md:hidden flex-col gap-2 align-center justify-center w-12 p-2">
    <span class="bg-secondary block w-full h-[3px] rounded-sm"></span>
    <span class="bg-secondary block w-full h-[3px] rounded-sm"></span>
    <span class="bg-secondary block w-full h-[3px] rounded-sm"></span>
</button>