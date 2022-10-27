<?php
/* Template Name: Premium Lenses */
?>

<?php get_header(); ?>

<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/premium-lenses/template-hero.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/premium-lenses/template-request-callback.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/premium-lenses/template-presbeyond-treatment.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/premium-lenses/template-without-needing-glass.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/premium-lenses/template-surgery-section.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/cataract/template-company-logos.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/premium-lenses/template-presbeyond-surgery.php'); ?>

<section class="section mb-[15rem] md:mb-[19rem]">
	<div class="section__container overflow-x-clip md:overflow-x-visible">
		<div class="swiper swiper--cataract-swiper max-w-[38rem] mx-auto">
			<!-- Swiper -->
			<div class="swiper-wrapper">
				<div class="
				swiper-slide
				 bg-white
				 py-[3.7rem]
				 px-[4.4rem]
				 drop-shadow-primary
				 rounded-primary
				 grid
				 gap-y-[4.5rem]
				 gap-x-[1rem]
				 grid-cols-2
				">
					<p class="px-3 col-start-1 col-span-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sed pulvinar varius varius tempor
						ultrices dolor. Egestas tincidunt in aliquam ipsum egestas sed placerat. Donec arcu vitae
						placerat iaculis nulla. Amet pellentesque ultrices id suscipit lacinia mattis nunc. Sed ultrices
						risus sapien.
					</p>
					<div class="flex flex-col gap-1 items-start">
						<h4 class="text-[1.8rem] font-fontBold">
							John Deo
						</h4>
						<span>Co founder of xxxxxx</span>
					</div>
					<div class="flex items-center justify-center">
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
					</div>
				</div>
				<div class="
				swiper-slide
				 bg-white
				 py-[3.7rem]
				 px-[4.4rem]
				 drop-shadow-primary
				 rounded-primary
				 grid
				 gap-y-[4.5rem]
				 gap-x-[1rem]
				 grid-cols-2
				">
					<p class="px-3 col-start-1 col-span-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sed pulvinar varius varius tempor
						ultrices dolor. Egestas tincidunt in aliquam ipsum egestas sed placerat. Donec arcu vitae
						placerat iaculis nulla. Amet pellentesque ultrices id suscipit lacinia mattis nunc. Sed ultrices
						risus sapien.
					</p>
					<div class="flex flex-col gap-1 items-start">
						<h4 class="text-[1.8rem] font-fontBold">
							John Wick
						</h4>
						<span>Co founder of Jhon</span>
					</div>
					<div class="flex items-center justify-center">
						<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
<?php getSVG('assets/images/icons/icon-star-yellow.svg'); ?>
					</div>
				</div>
			</div>
			<div class="swiper-button-next swiper-button-next--initial mt-[4.5rem] lg:mt-20"></div>
			<div class="swiper-button-prev swiper-button-prev--initial mt-[4.5rem] lg:mt-20"></div>
			<div class="swiper-pagination bottom-[-5.5rem] left-[50%] !translate-x-[-50%]"></div>
		</div>
	</div>
</section>

<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-faq.php'); ?>

<?php get_footer(); ?>
