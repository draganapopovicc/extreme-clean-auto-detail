<?php
$gallery = get_field('single_service_gallery');
$gallery_num = '';

if($gallery) {
	$gallery_num = count($gallery);
}

$class = "st-single-service";
;
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_single_service');
$style = "background-color: $bg_color";
?>

<section class="<?php echo $class; ?>" style="<?php echo $style ?>">
	<div class="container st-single-service__wrap">

		<div class="st-single-service__text">
			<?php get_template_part('components/intro'); ?>
			<?php get_template_part('components/buttons'); ?>
		</div>

		<?php if( $gallery ): ?>
			<div class="st-single-service__images images-num-<?php echo $gallery_num ?>">
				<?php foreach( $gallery as $image_id ):
					?>
					<figure>
						<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
					</figure>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
