<?php
$contact_short_code = get_field('contact_short_code');
$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$google_map_link = get_field('google_map_link', 'option');
$google_map_iframe = get_field('google_map_iframe');
$image = get_field('image_contact');

$class = 'st-contact ';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}
?>

<section class="<?php echo $class ?>">
	<div class="st-contact-wrap">
		<div class="st-contact__box">
			<div class="st-contact__form">
				<div class="container st-contact__info ">
                    <div class="st-contact__wrapper">
                        <?php get_template_part('components/intro'); ?> 
                        <div class="st-contact__form-shortcode">
                            <?php echo do_shortcode($contact_short_code);?>
                        </div>
                    </div>

                    <div class="st-contact__info-items">
                        <?php if($phone ): ?>
                            <a class="st-contact__info-item" aria-label="Call us"  class="phone" href="tel:<?php echo $phone;?>">
                                <div class="st-contact__icon">
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" id="phone-out" class="icon glyph"><path d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z" /><path d="M21,10a1,1,0,0,1-1-1,5,5,0,0,0-5-5,1,1,0,0,1,0-2,7,7,0,0,1,7,7A1,1,0,0,1,21,10Z"/><path d="M17,10a1,1,0,0,1-1-1,1,1,0,0,0-1-1,1,1,0,0,1,0-2,3,3,0,0,1,3,3A1,1,0,0,1,17,10Z" /></svg>
                                </div>
                                <div class="st-contact__info-wrap">
                                    <p>Call Us</p>
                                    <span><?php echo $phone ?></span> 
                                </div>
                            </a>
                        <?php endif ?>
                        <?php if($email ): ?>
                            <a  class="st-contact__info-item email" aria-label="Send us an email" class="email" href="mailto:<?php echo $email; ?>">
                                <div class="st-contact__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="50" height="50" viewBox="0 0 24 24"><path d="M22,5V9L12,13,2,9V5A1,1,0,0,1,3,4H21A1,1,0,0,1,22,5ZM2,11.154V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.154l-10,4Z"/></svg>
                                </div>

                                <div class="st-contact__info-wrap">
                                    <p>Email Us</p>
                                    <span><?php echo $email ?></span>
                                </div> 
                            </a>
                        <?php endif ?>
                        <?php if( $address && $google_map_link): ?>
                            <a class="st-contact__info-item" aria-label="Visit us on our address" target="_blank" href="<?php echo $google_map_link ?>">
                                <div class="st-contact__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="-3 0 20 20" version="1.1">
                                        <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-223.000000, -5399.000000)" fill="currentColor">
                                        <g transform="translate(56.000000, 160.000000)"><path d="M174,5248.219 C172.895,5248.219 172,5247.324 172,5246.219 C172,5245.114 172.895,5244.219 174,5244.219 C175.105,5244.219 176,5245.114 176,5246.219 C176,5247.324 175.105,5248.219 174,5248.219 M174,5239 C170.134,5239 167,5242.134 167,5246 C167,5249.866 174,5259 174,5259 C174,5259 181,5249.866 181,5246 C181,5242.134 177.866,5239 174,5239" "></path></g></g> </g>
                                    </svg>
                                </div>
                                <div class="st-contact__info-wrap">
                                    <p>Find Us</p>
                                    <span><?php echo $address ?></span> 
                                </div>
                            </a>
                        <?php endif ?>
                    </div>
                    
				</div>
			</div>
			<div class="containr st-contact__map-wrap">
                <div class="st-contact__map">
                    <?php echo $google_map_iframe?>
                </div>

                <?php if( $image):  ?>
                    <figure class="st-contact__image">
                        <?php
                            echo wp_get_attachment_image( $image, 'full', "");
                        ?>
                    </figure>
                <?php endif ?>
			</div>
		</div>
	</div>
</section>

