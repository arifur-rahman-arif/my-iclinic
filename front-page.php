<?php get_header('header.php'); ?>

<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-home-hero.php'); ?>

<section class="section">
	<div
		class="section__container section__container--desktop-padding section__container--bg-skyblue section__container--reduced-padding section__container--overflow-hidden">
		<h3 class="section__title section__title--light">
			What is<br />
			<strong>
				important to you?
			</strong>
		</h3>

		<div class="swiper swiper--service-swiper">
			<div class="section__card-container swiper-wrapper">
				<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-service-card.php', false); ?>

				<div class="card swiper-slide">
					<div class="card__header">
						<div class="card__title">
							<h3 class="title-text">
								Cataract<br />Treatment
							</h3>
						</div>
						<div class="card__media">
							<img class="media-image"
								src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/service-card-2.png'; ?>"
								alt="" />
							<?php getSVG('assets/images/icons/icon-play-blue.svg', 'media-icon'); ?>
						</div>
					</div>
					<div class="card__description">
						<span class="card__chip">Age 55+</span>
						<div class="card__description-list">
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Best treatment for
									<strong>Removing cloudy vision. </strong>
								</p>
							</div>
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Restoring clear, natural vision.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="card swiper-slide">
					<div class="card__header">
						<div class="card__title">
							<h3 class="title-text">
								Presbyond<br />Treatment
							</h3>
						</div>
						<div class="card__media">
							<img class="media-image"
								src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/service-card-3.png'; ?>" />
							<?php getSVG('assets/images/icons/icon-play-blue.svg', 'media-icon'); ?>
						</div>
					</div>
					<div class="card__description">
						<span class="card__chip">Age 50+</span>
						<div class="card__description-list">
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									The best treatment for
									<strong>Freedom from spectacles.</strong>
								</p>
							</div>
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									See at all distances without
									glasses Be free from glasses
									after cataract surgery.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="card swiper-slide">
					<div class="card__header">
						<div class="card__title">
							<h3 class="title-text">
								Implantable<br />Contact Lenses
							</h3>
						</div>
						<div class="card__media">
							<img class="media-image"
								src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/service-card-4.png'; ?>" />
							<?php getSVG('assets/images/icons/icon-play-blue.svg', 'media-icon'); ?>
						</div>
					</div>
					<div class="card__description">
						<span class="card__chip">Age 20+</span>
						<div class="card__description-list">
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Best treatment for
									<strong>life without glasses.</strong>
								</p>
							</div>
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Be active without risk of contact lens infections.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="card swiper-slide">
					<div class="card__header">
						<div class="card__title">
							<h3 class="title-text">
								Glaucoma<br />Care
							</h3>
						</div>
						<div class="card__media">
							<img class="media-image"
								src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/service-card-5.png'; ?>" />
							<?php getSVG('assets/images/icons/icon-play-blue.svg', 'media-icon'); ?>
						</div>
					</div>
					<div class="card__description">
						<span class="card__chip">Age 55+</span>
						<div class="card__description-list">
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Best treatment for
									<strong>Removing cloudy vision.
									</strong>
								</p>
							</div>
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Restoring clear, natural vision.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="card swiper-slide">
					<div class="card__header">
						<div class="card__title">
							<h3 class="title-text">
								Children
								<br />Myopia Control
							</h3>
						</div>
						<div class="card__media">
							<img class="media-image"
								src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/service-card-6.png'; ?>" />
							<?php getSVG('assets/images/icons/icon-play-blue.svg', 'media-icon'); ?>
						</div>
					</div>
					<div class="card__description">
						<span class="card__chip">Age 4+</span>
						<div class="card__description-list">
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Best treatment for
									<strong>slowing down the progression of myopia.
									</strong>
								</p>
							</div>
							<div class="list">
								<?php getSVG('assets/images/icons/icon-check-grey.svg'); ?>
								<p class="text">
									Atropine eye drops available.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-pagination swiper-pagination--service-pagination"></div>
		</div>
	</div>
</section>

<section class="section">
	<div class="section__container">
		<h3
			class="section__title section__title--light section__title--aligned-left section__title--increased-padding-left section__title--yellow-pseudo-border-left">
			Our<br />
			<strong>
				Mission
			</strong>
		</h3>

		<div class="section__description">
			<p class="mobile-view">
				For the past ten years My-iClinic has provided excellent patient care for anybody wanting
				clear, natural vision.
			</p>
			<p class="mobile-view">
				With leading opthalmologists Mr. Bolger and Ms. Odufuwa-Bolger,
				our North London team is here to make sure every patient receives the best treatment
				suitable for their eye health.
			</p>
			<p class="mobile-view">
				We understand how delicate and important our eyes are,
				which is why we with you through every step of your patient journey.
			</p>
			<p class="tablet-view">
				For the past ten years My-iClinic has provided excellent patient care for anybody wanting
				clear, natural vision. With leading opthalmologists Mr. Bolger and Ms. Odufuwa-Bolger,
				our North London team is here to make sure every patient receives the best treatment
				suitable for their eye health. We understand how delicate and important our eyes are,
				which is why we with you through every step of your patient journey.
			</p>
		</div>

		<h3
			class="section__title section__title--light section__title--aligned-left section__title--increased-padding-left section__title--yellow-pseudo-border-left section__title--increased-mobile-top-margin mobile-view">
			Request a<br />
			<strong>
				Call Back
			</strong>
		</h3>

		<div class="mission">
			<div class="mission__banner desktop-view">
				<img class="mission__image min-h-[77.5rem] rounded-primary"
					src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/doctor-councelling.jpeg'; ?>" />

				<div class="card-wrapper">
					<div class="card card--mission-card">
						<div class="card__header">
							<div class="card__title">
								<h3 class="title-text title-text--yellow-pseudo-border-left title-text--section-title">
									Request<br />
									<strong>
										A Call Back
									</strong>
								</h3>
								<h4 class="card__subtitle">Would like more information?</h4>
							</div>
						</div>
						<div class="card__description card__description--no-border-bg">
							<p>
								Request a call back from our friendly team and we will be able to help with any
								questions or
								information you need.
							</p>
						</div>
					</div>
				</div>

			</div>

			<div class="stepper">
				<div class="stepper__progress">
					<button class="stepper__progress-btn js-active" type="button" title="User Info">
						Personal info
						<?php getSVG('assets/images/icons/icon-check-white.svg', 'stepper__checkbox'); ?>
					</button>
					<button class="stepper__progress-btn" type="button" title="Address">
						Date & Time
						<?php getSVG('assets/images/icons/icon-check-white.svg', 'stepper__checkbox'); ?>
					</button>
					<button class="stepper__progress-btn" type="button" title="Order Info">
						Done
						<?php getSVG('assets/images/icons/icon-check-white.svg', 'stepper__checkbox'); ?>
					</button>
				</div>

				<!--form panels-->
				<form class="stepper__form form">
					<div id="form-scroll-start-point"></div>
					<!--single form panel-->
					<div class="stepper__panel js-active" data-animation="slideHorz">
						<div class="form-input-wrapper">
							<div class="form__input-wrapper">
								<label class="form__label" for="name">Name
									<span class="input-required">*</span>
								</label>
								<input class="form__input" type="text" name="name" id="name" />
							</div>

							<div class="form__input-wrapper">
								<label class="form__label" for="name">Phone number
									<span class="input-required">(Optional)</span>
								</label>
								<input class="form__input" type="text" name="phone" id="phone" />
							</div>

							<div class="form__input-wrapper">
								<label class="form__label" for="name">Email
									<span class="input-required">*</span>
								</label>
								</label>
								<input class="form__input" type="text" name="email" id="email" />
							</div>

							<div class="form__input-wrapper">
								<label class="form__label" for="name">Extra information
									<span>(Optional)</span>
								</label>
								<textarea class="form__input" type="text" name="extra-information"
									id="extra-information" rows="10"></textarea>
							</div>

							<button style="margin-bottom: 2rem"
								class="form__next-button button button--rounded-border js-btn-next" type="button">
								Next
								<?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
							</button>
						</div>
					</div>

					<!--single form panel-->
					<div class="stepper__panel" data-animation="slideHorz">
						<div class="form-input-wrapper">
							<div class="form__input-wrapper form__input-wrapper--flex-column" id="date-and-time-form">
							</div>

							<button class="form__next-button button button--rounded-border js-btn-next"
								id="animate-check-lottie" type="button">
								Next
								<?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
							</button>
						</div>
					</div>

					<!--single form panel-->
					<div class="stepper__panel" data-animation="slideHorz">
						<div class="lottie">
							<lottie-player id="lottie-check"
								src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/lottie/check.lottie.json'; ?>"
								background="transparent" speed="1" style="width: 5.3rem; height: 5.3rem;">
							</lottie-player>
						</div>
						<div class="thank-you">
							<h3 class="thank-you__title">Thank You</h3>
							<p class="thank-you__paragraph">
								Your booking was successful
							</p>
							<p class="thank-you__paragraph">
								We just sent you a confirmation email
							</p>
							<?php getSVG('assets/images/avaters/people-jumping.svg', 'thank-you__image'); ?>
						</div>
						<div class="pill pill--booking">
							<h3 class="pill__title">Your Booking</h3>
							<div class="pill__body">
								<span class="pill__year">
									2022
								</span>
								<span class="pill__date">
									Thursday Sep 23
								</span>
								<span class="pill__time">
									Sep 23
								</span>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</section>

<section class="section">
	<div class="lottie">
		<lottie-player id="lottie-green-living"
			src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/lottie/saving-planet.lottie.json'; ?>"
			background="transparent" speed="1">
		</lottie-player>
	</div>
</section>


<section class="section">
	<div class="section__container">
		<h3 class="section__title section__title--light">
			Funding your<br />
			<strong>
				treatment
			</strong>
		</h3>

		<div class="pill pill--treatment">
			<span class="pill__text">
				I am looking for ...
			</span>

			<?php getSVG('assets/images/icons/icon-arrow-circle-down.svg', 'pill__arrow-circle-down'); ?>
		</div>
	</div>
</section>

<?php get_footer('footer.php'); ?>
