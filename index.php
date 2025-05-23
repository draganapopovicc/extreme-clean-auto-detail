<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package s-tier
 */

get_header();

$title = get_field('title', 'option');
$intro_text = get_field('intro_title' ,'option');
$prefix_title = get_field('prefix_title', 'option');
$use_bg = get_field('use_background','option');
$bg_color = get_field('background_color','option');
$bg_img = get_field('background_image','option');
$bg_img_mob = get_field('background_image_mob','option');
$size = 'full';

$class = 'st_inner-hero';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}


?>
<main id="primary" class="site-main">
	<div class="<?php echo $class; ?>" >
	
		<?php if($use_bg) { ?>
			<div class="block_bg" style="background-color: <?php echo $bg_color; ?>">
				
				<?php
				if( $bg_img ) {
					echo wp_get_attachment_image( $bg_img, $size, "",array( 'class' => 'desk_bg' ) );
				}
				if( $bg_img_mob ) {
					echo wp_get_attachment_image( $bg_img_mob, $size, "",array( 'class' => 'mob_bg' ) );
				}
				?>
			</div>
		<?php } ?>

		<div class="container st_hero__container">
			<div class="st_inner-hero__content">
			<?php if($intro_text || $title || $prefix_title): ?>
				<div class="b-title b-title-h1">
					<?php if( $prefix_title ): ?>
						<p class="b-title__prefix"> 				
							<?php echo $prefix_title ?>
						</p>
					<?php endif ?>
					<?php if( $title ): ?>
						<h1 class="b-title__main title-1"> <?php echo $title ?> </h1>
					<?php endif ?>
					<?php if($intro_text): ?>
						<div  class="b-title__intro"> <?php echo $intro_text; ?> </div>
					<?php endif ?>
				</div>
			<?php endif ?>
			</div>
		</div>
	</div>

	<div class="container blogs__wrapper space_1">
		<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => -1, 
			);
			$query = new WP_Query($args);

			if ( $query->have_posts() ) : ?>
				<div class="archive_posts posts_grid " >
					<div class="posts_grid__all">
						<?php while ( $query->have_posts() ) :
							$query->the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile; ?>
					</div>
					<!-- <?php the_posts_navigation(); ?> -->
				</div>
			<?php endif; ?>
	</div>
</main><!-- #main -->
<?php
get_footer();




