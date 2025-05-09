<?php
$contact_short_code = get_field('contact_short_code_section');
$google_map_iframe  = get_field('google_map_iframe_section');
$image = get_field('image_contact_section');
$desc_contact_section = get_field('description_contact_section');

$class = 'st-contact-section';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_contact-section');
$style = "background-color: $bg_color";
?>

<section class="<?php echo $class ?>" style="<?php echo $style ?>">
	<div class="container st-contact-section__wrap">
        <div class="st-contact-section__left">
            <?php if( $image):  ?>
                <figure class="st-contact-section__image">
                    <?php
                        echo wp_get_attachment_image( $image, 'full', "");
                    ?>
                </figure>
            <?php endif ?>

            <?php if( $desc_contact_section ):  ?>
                <div class="st-contact-section__desc">
                    <?php echo $desc_contact_section?>
                </div>
            <?php endif ?>

            <?php if( $google_map_iframe ):  ?>
                <div class="st-contact-section__map">
                    <?php echo $google_map_iframe?>
                </div>
            <?php endif ?>
        </div>

        <div class="st-contact-section-right">
            <?php get_template_part('components/intro'); ?> 

            <div class="st-contact__form-shortcode">
                <?php echo do_shortcode($contact_short_code);?>
            </div>
        </div>
	</div>
</section>

