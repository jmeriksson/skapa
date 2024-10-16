<?php
/**
 * Module: Staff Grid
 * 
 * @package Skapa
 */

$heading = $args['heading'] ?? null;
$heading_size = $args['heading_size'] ?? 'h2';
$staff_members = $args['staff_members'];
$background_color = $args['background_color'];

if (!$staff_members || empty($staff_members) || !is_array($staff_members)) {
    return;
}

$module_classes = skapa_module_background_classes();
$module_classes = array_merge($module_classes, skapa_module_background_color($background_color));
$grid_length = count($staff_members) > 4 ? 4 : count($staff_members);
$grid_classes = ['grid grid-cols-1 md:grid-cols-2 gap-8'];
if ($grid_length >= 2) {
    $grid_classes[] = 'lg:gap-16';
}
if ($grid_length === 3) {
    $grid_classes[] = 'lg:grid-cols-3 lg:gap-16';
}
if ($grid_length >= 4) {
    $grid_classes[] = 'lg:grid-cols-4 lg:gap-8';
}

?>

<section class="<?php skapa_array_to_css_classes($module_classes); ?>">
    <div class="container">
        <?php
        if (isset($heading) && !empty($heading)) {
            skapa_render_heading(
                $heading,
                $heading_size,
                $background_color === 'primary' ? ['text-secondary mb-8'] : ['mb-8']
            );
        }
        ?>
        <div class="<?php skapa_array_to_css_classes($grid_classes); ?>">
            <?php
            foreach($staff_members as $staff_member) {
                skapa_render_staff_card($staff_member);
            }
            ?>
        </div>
    </div>
</section>