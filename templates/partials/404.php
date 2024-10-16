<?php
/**
 * 404 partial template
 * 
 * @package Skapa
 */

$heading = get_field('404_heading', 'option') ?? null;
$content = get_field('404_content', 'option') ?? null;
$header_color_classes = skapa_module_background_color('primary');
$padding_classes = skapa_module_background_classes();
$header_classes = array_merge($header_color_classes, $padding_classes);

if (!$heading && !$content) {
    return;
}

?>

<article>
    <?php if ($heading) : ?>
        <header class="<?php skapa_array_to_css_classes($header_classes); ?>">
            <div class="container">
                <?php skapa_render_heading($heading, 'h1', ['text-center mb-8']); ?>
            </div>
        </header>
    <?php endif; ?>
    <?php if ($content) : ?>
        <div class="<?php skapa_array_to_css_classes($padding_classes); ?>">
            <div class="container container--narrow">
                <div class="wysiwyg">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</article>
