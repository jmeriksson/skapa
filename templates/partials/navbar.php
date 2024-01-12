<?php
/**
 * The Navbar for the Skapa theme.
 * 
 * @package Skapa
 */

$logo = get_field('logo', 'options') ?? null;

?>
<nav class="bg-black text-white">
    <div class="container">
        <div class="flex flex-row py-4 justify-between">
            <a href="<?php echo esc_url( get_home_url() ); ?>">
                <?php if ($logo) : ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="h-full max-h-[50px]" />
                <?php else : ?>
                    <span><?php echo esc_html( get_bloginfo('name') ); ?></span>
                <?php endif; ?>
            </a>
            <div>
                <?php
                    $desktop_menu_args = [
                        'theme_location' => 'primary_menu',
                        'container' => false,
                        'echo' => true,
                        'menu_class' => 'list-none m-0 p-0 flex flex-row gap-8 h-full',
                        'add_anchor_class' => 'flex items-center h-full hover:underline'
                    ];
                    wp_nav_menu($desktop_menu_args)
                ?>
            </div>
        </div>
        
    </div>
</nav>