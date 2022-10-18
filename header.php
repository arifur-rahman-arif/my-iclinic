<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name');?><?php wp_title('|')?></title>
	<?php wp_head()?>
</head>

<body <?php is_home() ? '' : body_class()?>>

	<!--Start Header Area-->
	<header class="header">
		<div class="header__container">
			<a class="logo" href="<?php echo site_url('/') ?>">
				<img src="<?php echo MY_ICLINIC_PATH_URL.'assets/images/logos/logo-iclinic.png' ?>" alt="" />
			</a>

			<a class="logo logo--desktop" href="<?php echo site_url('/') ?>">
				<img src="<?php echo MY_ICLINIC_PATH_URL.'assets/images/logos/logo-iclinic-desktop.png' ?>" alt="" />
			</a>

			<nav class="navigation-menus">
				<?php getHeaderMenu()?>

				<div class="navigation-menus__consultation">
					<a class="consultation-button" href="#">Book a consultation</a>
				</div>
			</nav>

			<div class="round-box">
				<span class="round-box__capital-case">A</span>
				<span class="round-box__lower-case">a</span>
			</div>

			<div id="hamburger-menu" class="hamburger-menu">
				<span class="hamburger-menu__bar"></span>
				<span class="hamburger-menu__bar hamburger-menu__bar--small-bar"></span>
				<span class="hamburger-menu__bar"></span>
				<span class="hamburger-menu__bar hamburger-menu__bar--small-bar"></span>
			</div>
		</div>

		<div class="consultation">
			<a class="consultation__button" href="#">Book a consultation</a>
		</div>
	</header>
	<!--End Header Area-->

	<section class="hero">
		<div class="hero__container">
			<div class="hero__title-container">
				<h1 class="hero__title">
					Laser eye <br />surgery
				</h1>

				<h2 class="hero__subtitle">
					<strong>
						Can change it all
					</strong>
				</h2>
			</div>

			<div class="hero__image hero__image--mobile">
				<img src="<?php echo MY_ICLINIC_PATH_URL.'assets/images/hero/hero-image-mobile.jpg' ?>" alt="" />

				<?php load_template(MY_ICLINIC_PATH.'includes/template-parts/template-google-reviews.php', false)?>
			</div>

			<!-- Swiper -->
			<div class="swiper swiper--hero">
				<!-- Swiper -->
				<div class="swiper__container">
					<div class="swiper-wrapper">
						<div class="swiper-slide swiper-slide--no-opacity swiper-slide--hero-swiper">
							<div class="avater">
								<img src="<?php echo MY_ICLINIC_PATH_URL.'assets/images/avaters/lady..png' ?> "
									alt="" />
							</div>
							<div class="swiper-review">
								<div class="swiper-review__header">
									<h3 class="swiper-review__title">Ms. H</h3>
									<div class="swiper-review__stars">
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
									</div>
								</div>
								<div class="swiper-review__description">
									Miss Odufuwa removed both cataracts at the same time with
									excellent results. The staff are efficient and friendly and I would
									not hesitate in recommending
									My-iClinic for their excellent
									care.
								</div>
							</div>
						</div>
						<div class="swiper-slide swiper-slide--no-opacity swiper-slide--hero-swiper">
							<div class="avater">
								<img src="<?php echo MY_ICLINIC_PATH_URL.'assets/images/avaters/lady..png' ?> "
									alt="" />
							</div>
							<div class="swiper-review">
								<div class="swiper-review__header">
									<h3 class="swiper-review__title">Ms. D</h3>
									<div class="swiper-review__stars">
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
										<?php getSVG('assets/images/icons/icon-star-green.svg')?>
									</div>
								</div>
								<div class="swiper-review__description">
									Miss Odufuwa removed both cataracts at the same time with
									excellent results. The staff are efficient and friendly and I would
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div>
				</div>
			</div>

			<div class="button-container">
				<a class="button" href="#">
					<?php getSVG('assets/images/icons/icon-chat.svg', 'button__icon')?>
					Chat with us
				</a>
			</div>

			<?php load_template(MY_ICLINIC_PATH.'includes/template-parts/template-google-reviews.php', false, [
                    'modifiers' => 'pill-google-reviews--desktop'
            ])?>
		</div>
	</section>