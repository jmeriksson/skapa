<?php
/**
 * The footer for the Skapa theme.
 * 
 * @package Skapa
 */

$background_color = get_field('background_color', 'options') ?? 'primary';
$working_hours_display = get_field('working_hours_display', 'options') ?? false;
$working_hours_heading = get_field('working_hours_heading', 'options') ?? null;
$working_hours = get_field('working_hours', 'options') ?? null;
$contact_details_display = get_field('contact_details_display', 'options') ?? false;
$contact_details_heading = get_field('contact_details_heading', 'options') ?? null;
$contact_details = get_field('contact_details', 'options') ?? null;

if (!$working_hours_display && !$contact_details_display) {
    return;
}

?>

<div class="footer-<?php echo esc_attr($background_color); ?>">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 py-16 gap-8 lg:gap-6">
            <?php if ($working_hours_display) : ?>
                <div class="col-span-1 lg:col-span-6">
                    <?php
                    if (isset($working_hours_heading) && !empty($working_hours_heading)) {
                        skapa_render_heading(
                            $working_hours_heading,
                            'h3',
                            ['text-center mb-4 lg:mb-8']
                        );
                    };
                    ?>
                    <?php if ($working_hours) : ?>
                        <div class="grid grid-cols-2 gap-4 max-w-56 mx-auto">
                            <?php foreach ($working_hours as $working_hour) : ?>
                                <div class="col-span-1 text-left"><?php echo esc_html($working_hour['label']); ?></div>
                                <div class="col-span-1 text-right"><?php echo esc_html($working_hour['value']); ?></div>
                            <?php endforeach; ?>
                            </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($contact_details_display) : ?>
                <div class="col-span-1 lg:col-span-6">
                    <?php
                    if (isset($contact_details_heading) && !empty($contact_details_heading)) {
                        skapa_render_heading(
                            $contact_details_heading,
                            'h3',
                            ['text-center mb-4 lg:mb-8']
                        );
                    };
                    ?>
                    <?php if ($contact_details) : ?>
                        <div class="grid grid-cols-1 gap-4 text-center">
                            <?php
                                foreach ($contact_details as $contact_detail) {
                                    $template_name = 'templates/partials/footer/contact-details/' . str_replace('_', '-', $contact_detail['acf_fc_layout']);
                                    get_template_part($template_name, '', $contact_detail);
                                };
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
