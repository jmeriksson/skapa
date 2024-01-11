<?php
/**
 * The Header for the Skapa theme.
 *
 * @package Skapa
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
    <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( '/templates/partials/navbar' ); ?>