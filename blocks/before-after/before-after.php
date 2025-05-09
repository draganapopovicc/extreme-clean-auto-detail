<?php
$images = get_field('before_after_gallery');

$class = "st-before-after";
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}
?>

<section class="<?php echo $class; ?>">
	<div class="container">
	<?php get_template_part('components/intro'); ?>
		<?php if( $images ): ?>
			<div class="st-before-after__gallery">
				<?php foreach( $images as $image ): ?>
					<a href="<?php echo esc_url($image['url']); ?>" class="fancybox-figure" data-fancybox="gallery">
						<img width="307" height="396" src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
