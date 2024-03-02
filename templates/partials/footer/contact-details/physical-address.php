<?php
/**
 * Physical address partial. For use in the footer.
 * 
 * @package Skapa
 */

$rows = $args['rows'] ?? null;

if (!$rows || !is_array($rows)) {
    return;
}

?>

<?php foreach ($rows as $row) : ?>
    <p class="text-sm !mb-0"><?php echo esc_html($row['row']); ?></p>
<?php endforeach; ?>