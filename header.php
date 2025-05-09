<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<?php

$header__link = get_field('header_link', 'option');
if($header__link) {
	$header_link_url = $header__link['url'];
	$header_link_title = $header__link['title'];
	$header_link_target = $header__link['target'] ? $header__link['target'] : '_self';
};

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<meta name="theme-color" content="#6bae07" />
	
	<?php echo get_field('head_script', 'option'); ?> <!-- Head External Code -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php echo get_field('body_top_script', 'option'); ?> <!-- Body Top External Code -->
<header id="masthead" class="header-main">
	<div class="header__top">
		<div class="container header__top-wrap">
			<?php get_template_part('template-parts/contact-info'); ?>
			<?php get_template_part('template-parts/socials'); ?>
		</div>
	</div>
	

	<div class="header__bottom">
		<div class="container header__bottom-wrap">
				<figure class="site-logo ">
					<?php
					the_custom_logo(); ?>
				</figure>

				<nav id="site-navigation" class="main-navigation">
					<!-- Mobile Nav Button -->
					<div class="hamburger">
						<label for="nav-toggle">Navigation Menu</label>
						<input type="checkbox" class="menu-toggle" id="nav-toggle">
						<div></div>
					</div>
					<!-- Mobile Nav Button -->

					<div class="main-navigation_wrap">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main',
								'menu_id'        => 'primary-menu',
								'walker'		 => new CustomMenuWalker
							)
						);
						?>

						<div class="mobile-header__info">
							<?php get_template_part('template-parts/contact-info'); ?>
							<?php get_template_part('template-parts/socials'); ?>
						</div>

						<?php if($header__link): ?>
							<div class="header__button button-mobile">
								<a class="btn btn-2" href="<?php echo esc_url($header_link_url) ?>"  target="<?php echo esc_attr( $header_link_target ); ?>">
									<?php echo $header_link_title ?>
								</a>
							</div>
						<?php endif ?>
					</div>
				</nav><!-- #site-navigation -->

			
			<?php if($header__link): ?>
				<div class="header__button button-desktop">
					<a class="btn btn-1" href="<?php echo esc_url($header_link_url) ?>"  target="<?php echo esc_attr( $header_link_target ); ?>">
						<?php echo $header_link_title ?>
						<span></span>
					</a>
				</div>
			<?php endif ?>
		</div>
	</div>
</header><!-- #masthead -->

<div id="page" class="site">

