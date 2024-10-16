<?php
/**
 * Module: Forty sixty
 * 
 * @package Skapa
 */

$heading = $args['heading'];
$heading_size = $args['heading_size'] ?? 'h2';
$wysiwyg = $args['wysiwyg'] ?? '';
$background_color = $args['background_color'] ?? 'primary';

$module_classes = skapa_module_background_classes();
$module_classes = array_merge($module_classes, skapa_module_background_color($background_color));

?>

<section class="<?php skapa_array_to_css_classes($module_classes); ?>">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
            <div class="lg:col-span-5">
                <?php
                    if (isset($heading) && !empty($heading)) {
                        skapa_render_heading(
                            $heading,
                            $heading_size,
                            isset($background_color) && !empty($background_color) && $background_color === 'primary'
                                ? ['text-secondary']
                                : []
                        );
                    }
                ?>
            </div>
            <div class="lg:col-span-7">
                <?php
                    if ($wysiwyg) {
                        get_template_part(
                            'templates/components/wysiwyg',
                            null,
                            [
                                'content' => $wysiwyg
                            ]
                        );
                    }
                ?>
            </div>
        </div>
    </div>
</section>