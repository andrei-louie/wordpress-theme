<?php
/**
 * Header template.
 *
 * @package Aquila
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<?php if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
			<div id="header-widget-area" class="nws-widget-area widget-area" role="complementary">
				<?php dynamic_sidebar( 'custom-header-widget' ); ?>
			</div>
		<?php else : get_template_part( 'template-parts/header/nav' ); ?>	
		<?php endif; ?>
	</header>
	<div id="content" class="site-content">

