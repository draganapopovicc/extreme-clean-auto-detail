<?php
$class = 'st-testimonials';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_testimonials');

$style = "background-color: $bg_color";
?>

<section class="<?php echo $class ?>" style="<?php echo $style ?>">
	<div class="container">
		<div class="st-testimonials__title">
			<?php get_template_part('components/intro'); ?>
		</div>

        <?php if( have_rows('testimonials') ): ?>
            <div  class="st-testimonials__all">
                <?php while( have_rows('testimonials') ) : the_row();
                    $name = get_sub_field('testimonial_name'); 
                    $title = get_sub_field('testimonial_title'); 
                    $description = get_sub_field('testimonial_description'); 
                        ?>
                    <div class="st-testimonial">
                        <?php if($title): ?>
                            <p class="st-testimonial__title"> <?php echo $title ?> </p>
                        <?php endif ?>

                        <?php if($description): ?>
                            <div class="st-testimonial__desc">
                               <div><?php echo $description ?> </div>  
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor"  width="140" version="1.1" id="Capa_1" viewBox="0 180 490 130" xml:space="preserve">
                                        <g>
                                            <polygon points="60.44,233.482 48.895,196.215 37.351,233.482 0,233.482 30.22,256.513 18.676,293.785 48.895,270.744 79.115,293.785 67.571,256.513 97.791,233.482"/>
                                            <polygon points="158.492,233.482 146.948,196.215 135.403,233.482 98.052,233.482 128.272,256.513 116.728,293.785 146.948,270.744 177.168,293.785 165.623,256.513 195.843,233.482"/>
                                            <polygon points="256.544,233.482 245,196.215 233.456,233.482 196.104,233.482 226.324,256.513 214.78,293.785 245,270.744 275.22,293.785 263.676,256.513 293.895,233.482"/>
                                            <polygon points="354.596,233.482 343.052,196.215 331.508,233.482 294.157,233.482 324.377,256.513 312.832,293.785 343.052,270.744 373.272,293.785 361.728,256.513 391.948,233.482"/>
                                            <polygon points="441.105,196.215 429.56,233.482 392.209,233.482 422.429,256.513 410.885,293.785 441.105,270.744 471.324,293.785 459.78,256.513 490,233.482 452.649,233.482"/>
                                        </g>
                            </div>
                        <?php endif ?>
                            
                        <?php if($name): ?>
                            <p class="st-testimonial__name"> <?php echo $name ?> </p>
                        <?php endif ?>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif ?>

        <?php get_template_part('components/buttons'); ?>
	</div>
</section>

