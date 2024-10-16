<?php
/**
 * Module: Hero
 * 
 * @package Skapa
 */

$background_type = $args['background_type'];
$background_image = $args['background_image'] ?? null;
$background_color = $args['background_color'] ?? null;
$text_color = $args['text_color'] ?? null;
$overlay = $args['overlay'] ?? null;
$height = $args['height'] ?? 'large';
$heading = $args['heading'] ?? null;
$subheading = $args['subheading'] ?? null;
$button_primary = $args['button_primary'] ?? null;
$button_secondary = $args['button_secondary'] ?? null;

$background_classes = [''];
$content_classes = [''];
$overlay_classes = [''];
$button_color = 'primary';
$aspect_ratio_classes = ['aspect-[3/4] sm:aspect-[1/1]'];
$button_primary_color = 'primary';
$button_secondary_color = 'secondary';

switch ($height) {
    case 'small':
        $aspect_ratio_classes[] = 'md:aspect-[21/9]';
        break;
    default:
        $aspect_ratio_classes[] = 'md:aspect-[16/9] 2xl:aspect-[21/9]';
        break;
}

if ($background_type === 'color' && $background_color) {
    $background_classes[] = 'module-' . $background_color;
    $content_classes[] = 'flex items-center justify-center';
    $content_classes = array_merge($content_classes, $aspect_ratio_classes);
    switch ($background_color) {
        case 'primary':
            $button_primary_color = 'secondary';
            $button_secondary_color = 'secondary';
            break;
        default:
            $button_primary_color = 'primary';
            $button_secondary_color = 'primary';
            break;
    }
}
if ($background_type === 'image' && $background_image) {
    $background_classes[] = 'relative';
    $content_classes[] = 'absolute inset-0 w-full h-full flex justify-center items-center';
    $content_classes = array_merge($content_classes, $aspect_ratio_classes);
    switch ($text_color) {
        case 'primary':
            $background_classes[] = 'text-primary';
            $button_primary_color = 'primary';
            $button_secondary_color = 'primary';
            break;
        default:
            $background_classes[] = 'text-secondary';
            $button_primary_color = 'secondary';
            $button_secondary_color = 'secondary';
            break;
    }
}
if ($overlay) {
    $overlay_classes[] = 'w-full h-full absolute inset-0 opacity-30';
    if ($text_color === 'primary') {
        $overlay_classes[] = 'bg-secondary';
    } else {
        $overlay_classes[] = 'bg-primary';
    }
}

?>

<section>
    <div class='<?php skapa_array_to_css_classes($background_classes); ?>'>
        <?php if ($background_type === 'image' && $background_image) : ?>
            <figure class='<?php skapa_array_to_css_classes($aspect_ratio_classes); ?>'>
                <?php
                echo wp_get_attachment_image(
                    $background_image,
                    'large',
                    false,
                    [
                        'class' => 'object-cover w-full h-full',
                    ]
                );
                ?>
            </figure>
        <?php endif; ?>
        <?php if ($overlay && $background_type === 'image') : ?>
            <div class='<?php skapa_array_to_css_classes($overlay_classes); ?>'></div>
        <?php endif; ?>
        <div class='<?php skapa_array_to_css_classes($content_classes); ?>'>
            <div class='container'>
                <div class='flex flex-col items-center mx-auto max-w-5xl gap-4'>
                    <?php if ($heading) : ?>
                        <h1 class='h1 text-center'><?php echo esc_html($heading); ?></h1>
                    <?php endif; ?>
    
                    <?php if ($subheading) : ?>
                        <p class='text-xl lg:text-3xl text-center'><?php echo esc_html($subheading); ?></p>
                    <?php endif; ?>
    
                    <?php if ($button_primary || $button_secondary) : ?>
                        <div class="flex flex-col sm:flex-row gap-4 sm:gap-8 mt-4">
                            <?php
                            if ($button_primary) {
                                get_template_part(
                                    'templates/components/button',
                                    null,
                                    [
                                        'title' => $button_primary['title'],
                                        'url' => $button_primary['url'],
                                        'color' => $button_primary_color,
                                        'target' => $button_primary['target'],
                                        'classes' => ['w-full sm:w-auto']
                                    ]
                                );
                            }
                            ?>
                            <?php
                            if ($button_secondary) {
                                get_template_part(
                                    'templates/components/button',
                                    null,
                                    [
                                        'title' => $button_secondary['title'],
                                        'url' => $button_secondary['url'],
                                        'color' => $button_secondary_color,
                                        'target' => $button_secondary['target'],
                                        'outline' => true,
                                        'classes' => ['w-full sm:w-auto']
                                    ]
                                );
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>