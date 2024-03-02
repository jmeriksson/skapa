<?php
/**
 * Social media partial. For use in the footer.
 * 
 * @package Skapa
 */

$links = $args['links'] ?? null;

if (!$links || !is_array($links)) {
    return;
}

?>
<div class="flex flex-row flex-wrap justify-center gap-6 w-auto mx-auto">
    <?php
    foreach($links as $link) {
        get_template_part(
            'templates/components/icon',
            null,
            [
                'icon' => $link['platform'],
                'url' => $link['url'],
                'target' => '_blank',
            ]
        );
    }
    ?>
</div>
