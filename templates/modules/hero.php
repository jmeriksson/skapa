<?php

$background_type = $args['background_type'];
$background_image = $args['background_image'] ?? null;
$background_color = $args['background_color'] ?? null;
$heading = $args['heading'] ?? null;
$subheading = $args['subheading'] ?? null;
$button = $args['button'] ?? null;

$background_classes = [''];

if ($background_type === 'color' && $background_color) {
    $background_classes[] = 'module-' . $background_color;
}

?>

<div>
    <div class="<?php echo esc_attr(implode(' ', $background_classes)); ?>">
        <div class="container">
            <div class="flex flex-col items-center">
                <?php if ($heading) : ?>
                    <h1 class="h1"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>

                <?php if ($subheading) : ?>
                    <p class="h3 font-sans"><?php echo esc_html($subheading); ?></p>
                <?php endif; ?>

                <?php
                if ($button) {
                    get_template_part(
                        'templates/components/button',
                        null,
                        [
                            'title' => $button['title'],
                            'url' => $button['url'],
                            'color' => 'primary',
                            'target' => $button['target'],
                        ]
                    );
                }
                ?>
            </div>
        </div>

    </div>
</div>