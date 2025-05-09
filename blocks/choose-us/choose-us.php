<?php
$choose_us_repeater = get_field('choose_us_reasons');
$choose_us_num = 1;
$choose_us_desc = get_field('description_choose_us');

$class = 'st-choose-us section';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$bg_color = get_field('background_color_choose-us');
$style = "background-color: $bg_color";
?>

<div class="<?php echo $class ?>" style="<?php echo $style ?>">
    <div class="container">
        <div class="st-choose-us__content">
            <?php get_template_part('components/intro'); ?>
            
            <?php if( have_rows('choose_us_reasons') ): ?>
                <div class="st-choose-us__all">
                    <?php while( have_rows('choose_us_reasons') ) : the_row();
                        $icon = get_sub_field('choose_us_icon'); 
                        $title = get_sub_field('choose_us_title'); 
                        $description = get_sub_field('choose_us_desc'); 
                    ?>

                    <div class="st-choose-us_item">
                        <div class="st-choose-us_item__icon-wrap">
                            <?php if( $icon ) : ?>
                                <dic class="st-choose-us_item-icon">
                                    <?php echo $icon?>
                                </dic>
                            <?php endif ?>

                            <span class="st-choose-us_item-num"> 0<?php echo  $choose_us_num ?>.</span>    
                        </div>
                       
                        <div class="st-choose-us_item-text">
                            <?php if($title): ?>
                                <p class="st-choose-us_item-title"><?php echo $title ?></p>
                            <?php endif ?>
                            <?php if($description): ?>
                                <div><?php echo $description ?></div>
                            <?php endif ?>
                        </div>
                    </div>
                    <?php $choose_us_num++ ?>
                    <?php endwhile ?>
                </div>
            <?php endif ?>
            
            <div class="st-choose-us__bottom">
                <?php if($choose_us_desc ): ?>
                    <div  class="st-choose-us__bottom-desc"> <?php echo $choose_us_desc ; ?> </div>
                <?php endif ?>

                <?php get_template_part('components/buttons'); ?>
            </div>
        </div>
    </div>
</div>


