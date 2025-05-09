<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<?php
$company_name = get_field('footer_company_name', 'option');
$company_description = get_field('footer_company_description', 'option');
?>

<footer id="colophon" class="site-footer footer">
	<div class="footer__top space_1">
		<div class="container footer__wrapper">
			<?php if($company_description || $company_name): ?>
				<div class="footer__box footer__box--about">
					<?php if($company_name) :?>
						<div class="footer__company-name"> <?php echo $company_name; ?> </div>
					<?php endif ?>

					<?php if($company_description) :?>
						<div class="footer__box-description"> <?php echo wp_kses_post($company_description); ?> </div>
					<?php endif ?>

					<div class="footer__socials">
						<p class="footer__box-title">Follow Us:</p>

						<?php get_template_part('template-parts/socials'); ?>
					</div>
				</div>
			<?php endif ?>

			<div class="footer__right">
				<div class="footer__info">
					<?php get_template_part('template-parts/contact-info'); ?>
				</div>

				<div class="footer__links-wrap">
					<div class="footer__box footer__box--services">
						<p class="footer__box-title">Our Services</p>

						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_id'        => 'footer-menu',
								)
							);
						?>
					</div>

					<?php if( have_rows('service_areas', 'option') ): ?>
						<div class="footer__box footer__box--areas">
							<p class="footer__box-title">We provide services in</p>

							<ul>
								<?php while( have_rows('service_areas', 'option') ) : the_row();
									$region = get_sub_field('region'); ?>
										<li><?php echo $region ?></li>
								<?php endwhile ?>
							</ul>
						</div>
					<?php endif ?>

					<div class="footer__box footer__box--hours">
						<p class="footer__box-title">Opening Hours</p>

						<?php if( have_rows('working_hours', 'option') ): ?>
							<div class="work-time">
								<div class="work-time__wrap">
									<?php while( have_rows('working_hours', 'option') ) : the_row();
									$day =  get_sub_field('daydays');
									$hours =   get_sub_field('hours');
									?>
									<div class="work-time__hours">  
										<?php if($day): ?> 
											<span> <?php echo $day ?> </span>
										<?php endif ?>
										<?php if($hours): ?> 
											<p> <?php echo $hours ?> </p>
										<?php endif ?>
									</div>
									<?php endwhile;?>
								</div>
							</div>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<div class="container">
		Copyright © <?php echo date('Y')?> | All Rights Reserved. Extreme Clean Auto Detail
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--
	         (__)
     `\------(oo)
       ||    (__) <(What are you looking for?)
       ||w--||
-->
<?php echo get_field('body_bottom_script', 'option'); ?> <!-- Body Bottom External Code -->
</body>
</html>
