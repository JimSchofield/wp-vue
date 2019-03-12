<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-vue
 */



/**
 * Gets menu and places it as an attribute into the vue-header vue component
 * 
 */
$menu_items = wp_get_nav_menu_items('menu-1');
$json = wp_json_encode($menu_items);

?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="app">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-vue' ); ?></a>

		<header id="masthead" class="site-header">
			<vue-header menu-json='<?php echo $json; ?>'></vue-header>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
