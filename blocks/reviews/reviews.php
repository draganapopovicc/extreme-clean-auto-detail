<?php
$reviews_short_code = get_field('reviews_short_code');
$class = 'st-reviews';

if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}
?>

<section class="<?php echo $class ?>">
	<?php get_template_part('components/background'); ?>
	<div class="st-reviews__wrap container">
		<?php get_template_part('components/intro'); ?>

		<div class="st-reviews__reviews">
			<?php echo do_shortcode($reviews_short_code);?>
		</div>
	</div>
</section>

