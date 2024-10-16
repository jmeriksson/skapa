<?php
/**
 * The header for the Skapa theme.
 * 
 * @package Skapa
 */

$logo = get_field('logo', 'options') ?? null;

?>
<header class="bg-primary text-secondary">
    <div class="container">
        <div class="flex flex-row py-4 justify-between">
            <a href="<?php echo esc_url( get_home_url() ); ?>">
                <?php if ($logo) : ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="h-full max-h-[50px]" />
                <?php else : ?>
                    <span><?php echo esc_html( get_bloginfo('name') ); ?></span>
                <?php endif; ?>
            </a>
            <div class="flex flex-row">
                <?php
                    do_action('skapa_render_desktop_menu');
                    do_action('skapa_render_mobile_menu_toggle');
                ?>
            </div>
        </div>
        
    </div>
</header>