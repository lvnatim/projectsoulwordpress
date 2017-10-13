<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package projectsoul
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'projectsoul' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="l-container l-container-no-padding">
			<div class="site-branding">
				<?php echo get_template_part('assets/PSP_logo_draft_1-08', ''); ?>
			</div>
			<div class="m-hamburger">
				<figure></figure>
				<figure></figure>
				<figure></figure>
			</div>



			<!-- .site-branding -->


			<!-- <div class="Container">
			  <input id="menu" type="checkbox">
			  <label for="menu"></label>
			</div>


			    <ul id="menu">
					<?php echo wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</ul>
			</section>
			<nav id="site-navigation" class="main-navigation">
				
			</nav> --><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
