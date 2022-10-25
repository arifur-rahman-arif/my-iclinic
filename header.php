<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php
 bloginfo('name');
 wp_title('|');
 ?></title>
	<?php wp_head(); ?>
</head>

<body <?php is_home() ? '' : body_class(); ?>>

	<!--Start Header Area-->
	<header class="header">
		<div class="header__container">
			<a class="logo" href="<?php echo site_url('/'); ?>">
				<img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/logos/logo-iclinic.png'; ?>" alt="" />
			</a>

			<a class="logo logo--desktop" href="<?php echo site_url('/'); ?>">
				<img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/logos/logo-iclinic-desktop.png'; ?>" alt="" />
			</a>

			<nav class="navigation-menus">
				<?php getHeaderMenu(); ?>

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