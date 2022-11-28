<?php
/* Template Name: Cataract */
?>


<?php get_header(); ?>

<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-cataract-hero.php'); ?>

<section class="section section--request-calback" id="request-call-back-form">
	<form class="form form--request-callback">
		<div id="form-scroll-start-point"></div>

		<h3 class="form__title">Call back request</h3>

		<div class="form-input-wrapper">
			<div class="form__input-wrapper">
				<label class="form__label" for="name">Name
					<span class="input-required">*</span>
				</label>
				<input class="form__input" type="text" name="name" id="name" />
			</div>

			<div class="form__input-wrapper">
				<label class="form__label" for="name">Phone number
					<span>(Optional)</span>
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
				<textarea class="form__input" type="text" name="extra-information" id="extra-information"
					rows="4"></textarea>
			</div>

			<div class="form__input-wrapper form__input-wrapper--radio-input">
				<div>
					<input type="radio" name="any-date" value="any-date" id="any-date" checked />
					<label class="form__label form__label--radio-input-label" for="any-date">Any date</label>
				</div>
				<div>
					<label class="form__label form__label--radio-input-label form__label--date-picker" for="any-date">
						<?php getSVG('assets/images/icons/icon-calender-yellow-bg.svg'); ?>
						<span>Pick a date</span>
					</label>
					<input type="date" class="hidden" name="date" id="date" />
				</div>
			</div>

			<div class="form__input-wrapper form__input-wrapper--radio-input">
				<div>
					<input type="radio" name="time-range" value="flexible" id="flexible" checked />
					<label class="form__label form__label--radio-input-label" for="flexible">Flexible</label>
				</div>
				<div>
					<input type="radio" name="time-range" value="morning" id="morning" />
					<label class="form__label form__label--radio-input-label" for="morning">Morning</label>
				</div>
				<div>
					<input type="radio" name="time-range" value="afternoon" id="afternoon" />
					<label class="form__label form__label--radio-input-label" for="afternoon">Afternoon</label>
				</div>
			</div>

			<div class="flex justify-start items-center gap-[1.5rem] w-full">
				<input id="remember-me" name="remember-me" type="checkbox"
					class="h-[2.4rem] w-[2.4rem] border-[#697072] accent-brand">
				<label for="remember-me" class="font-fontMedium text-[#697072] text-[1.6rem] leading-[2.4rem]">I accept
					the
					<a href="#"
						class="text-[#0085FF] hover:underline-offset-8 hover:underline hover:decoration-[#0085FF]">terms
						and conditions</a>
				</label>
			</div>

			<button class="form__next-button button button--rounded-border js-btn-next" type="button">
				Next
				<?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
			</button>
		</div>
	</form>
</section>

<section class="section">
	<span class="section__simple-process-bg section__simple-process-bg--bg-1">
	</span>
	<span class="section__simple-process-bg section__simple-process-bg--bg-2">
	</span>
	<span class="section__simple-process-bg section__simple-process-bg--bg-3">
	</span>
	<div class="section__container">
		<h3
			class="section__title section__title--light section__title--aligned-left-desktop section__title--yellow-pseudo-border-left-desktop">
			A simple process<br />
			<strong>
				To living cataract-free
			</strong>
		</h3>

		<div class="accordion accordion mobile-to-tablet-view">
			<div class="accordion__item">
				<div class="accordion__header">
					<?php getSVG('assets/images/icons/icon-doctor-blue.svg', 'accordion__item-icon'); ?>
					<h4 class="title">Your Consultation</h4>
					<?php getSVG('assets/images/icons/icon-arrow-right.svg', 'icon-arrow-right'); ?>
				</div>

				<div class="accordion__description">
					<div class="section__description">
						<p class="text-align-left">
							The first step to living life with clearer vision is the initial consultation with one of
							our friendly cataract specialists.
						</p>
						<p class="text-align-left">
							Your Cataract consultation will begin with some initial scans so we can examine your eyes
							and explain the most suitable treatment options for you.
						</p>
						<p class="text-align-left">
							With our expert technology, our senior technicians will be able to capture how the cataracts
							are affecting you, your lifestyle and where exactly they are affecting your field of vision.
						</p>
						<p class="text-align-left">
							These assessments will be passed to your cataract specialist, who will meet with you and
							talk you through the best <a href="#">lens implants options</a> for your cataract surgery.
						</p>
						<p class="text-align-left">
							Your first cataract consultation and assessment is an all-inclusive £200 fee, with no
							obligation to have surgery if you wish to have some time to consider your treatment options.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion__item">
				<div class="accordion__header">
					<?php getSVG('assets/images/icons/icon-eye-yellow.svg', 'accordion__item-icon'); ?>
					<h4 class="title">Your Surgery</h4>
					<?php getSVG('assets/images/icons/icon-arrow-right.svg', 'icon-arrow-right'); ?>
				</div>

				<div class="accordion__description">
					<div class="section__description">
						<p class="text-align-left">
							The most comforting part of our care is that our patients know their surgeon from the
							beginning; they will be your dedicated specialist throughout your consultation, treatment
							and aftercare.
						</p>
						<p class="text-align-left">
							Before your surgery day, our patient care coordinator will reach out and answer any extra
							information that will be helpful to you before your treatment.
						</p>
						<p class="text-align-left">
							On the day of your cataract surgery, our friendly nurse team will be with you before your
							treatment time and they will answer any questions you may have for your ease, care and
							comfort.
						</p>
						<p class="text-align-left">
							Your cataract surgery will be completely painless and takes just an average of 60 minutes,
							depending on your lens options.
						</p>
						<p class="text-align-left">
							Our nurses will be there after your surgery to help you through our at-home instructions
							which will help you in your recovery time.
						</p>
					</div>
				</div>
			</div>

			<div class="accordion__item">
				<div class="accordion__header">
					<?php getSVG('assets/images/icons/icon-stethoscope.svg', 'accordion__item-icon'); ?>
					<h4 class="title">Your Aftercare</h4>
					<?php getSVG('assets/images/icons/icon-arrow-right.svg', 'icon-arrow-right'); ?>
				</div>

				<div class="accordion__description">
					<div class="section__description">
						<p class="text-align-left">
							The most comforting part of our care is that our patients know their surgeon from the
							beginning; they will be your dedicated specialist throughout your consultation, treatment
							and aftercare.
						</p>
						<p class="text-align-left">
							Before your surgery day, our patient care coordinator will reach out and answer any extra
							information that will be helpful to you before your treatment.
						</p>
						<p class="text-align-left">
							On the day of your cataract surgery, our friendly nurse team will be with you before your
							treatment time and they will answer any questions you may have for your ease, care and
							comfort.
						</p>
						<p class="text-align-left">
							Your cataract surgery will be completely painless and takes just an average of 60 minutes,
							depending on your lens options.
						</p>
						<p class="text-align-left">
							Our nurses will be there after your surgery to help you through our at-home instructions
							which will help you in your recovery time.
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="tablet-view simple-process">
			<div class="simple-process__item">
				<div class="item-left">
					<div class="simple-process__header">
						<?php getSVG('assets/images/icons/icon-number-rounded-blue-01.svg', 'simple-process-icon'); ?>
						<h3 class="title">Your Consultation</h3>
					</div>

					<div class="section__description">
						<p>
							The first step to living life with clearer vision is the initial consultation with one of
							our friendly cataract specialists.
						</p>
						<p>
							Your Cataract consultation will begin with some initial scans so we can examine your eyes
							and explain the most suitable treatment options for you.
						</p>
						<p>
							With our expert technology, our senior technicians will be able to capture how the cataracts
							are affecting you, your lifestyle and where exactly they are affecting your field of vision.
						</p>
						<p>
							These assessments will be passed to your cataract specialist, who will meet with you and
							talk you through the best <a href="#">lens implants options</a> for your cataract surgery.
						</p>
						<p>
							Your first cataract consultation and assessment is an all-inclusive £200 fee, with no
							obligation to have surgery if you wish to have some time to consider your treatment options.
						</p>
					</div>
				</div>
				<div class="item-right">
					<div class="image-wrapper">
						<img class="simple-process-image"
							src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/doctor-scanning-eye.png'; ?>"
							alt="" />
					</div>
				</div>
			</div>
		</div>

		<div class="tablet-view simple-process">
			<div class="simple-process__item simple-process__item--reverse">
				<div class="item-left">
					<div class="simple-process__header">
						<?php getSVG('assets/images/icons/icon-number-rounded-blue-02.svg', 'simple-process-icon'); ?>
						<h3 class="title">Your Surgery</h3>
					</div>

					<div class="section__description">
						<p>
							The most comforting part of our care is that our patients know their surgeon from the
							beginning; they will be your dedicated specialist throughout your consultation, treatment
							and aftercare.
						</p>
						<p>
							Before your surgery day, our patient care coordinator will reach out and answer any extra
							information that will be helpful to you before your treatment.
						</p>
						<p>
							On the day of your cataract surgery, our friendly nurse team will be with you before your
							treatment time and they will answer any questions you may have for your ease, care and
							comfort.
						</p>
						<p>
							Your cataract surgery will be completely painless and takes just an average of 60 minutes,
							depending on your lens options.
						<p>
							Our nurses will be there after your surgery to help you through our at-home instructions
							which will help you in your recovery time.
						</p>
					</div>
				</div>
				<div class="item-right">
					<div class="image-wrapper">
						<img class="simple-process-image"
							src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/doctor-handshake.png'; ?>"
							alt="" />
					</div>
				</div>
			</div>
		</div>

		<div class="tablet-view simple-process">
			<div class="simple-process__item">
				<div class="item-left">
					<div class="simple-process__header">
						<?php getSVG('assets/images/icons/icon-number-rounded-blue-03.svg', 'simple-process-icon'); ?>
						<h3 class="title">Your Aftercare</h3>
					</div>

					<div class="section__description">
						<p>
							There is nothing more important than our patients feeling comfortable after their procedure.
						</p>
						<p>
							We advise a <strong>two week recovery period</strong> before attending your aftercare
							appointment with us.
						</p>
						<p>
							Our team will always be at the end of a phone call throughout your recovery at home to
							answer any more questions you may have.
						</p>
						<p>
							In your aftercare appointment, your cataract specialist will check the improvement of your
							vision before you can enjoy your cataract-free vision!
						</p>
					</div>
				</div>
				<div class="item-right">
					<div class="image-wrapper">
						<img class="simple-process-image"
							src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/old-people-hugging.png'; ?>"
							alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section
	class="section section--cataract-increased-top-margin flex flex-col-reverse md:flex-row items-center justify-between md:gap-[2.5rem]">
	<div class="section__container !mt-[10rem] md:!mt-0 overflow-x-clip md:overflow-x-visible">
		<div class="swiper swiper--cataract-swiper max-w-[38rem] ml-0 sm:ml-auto">
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

	<div class="w-full
		bg-[#09455d]
		rounded-tl-[var(--border-radius)]
		rounded-bl-[var(--border-radius)]
		">
		<h3 class="
			font-fontLatoBold
			text-[2.8rem]
			sm:text-[4rem]
			leading-[3.2rem]
			sm:leading-[4rem]
			text-left
			text-white
			ml-[4.2rem]
			mt-[3.1rem]
			md:ml-[5.4rem]
			md:mt-[4rem]
			max-w-[50.2rem]
			">
			What our cataract
			patients Say after treatment
		</h3>
		<div class="mt-[2rem] md:mt-[3.3rem] px-5 relative">
			<div class="overflow-hidden pb-[3rem] md:translate-x-[-2.8rem]">
				<img class="w-full h-full object-contain rounded-[var(--border-radius)]"
					src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/doctor-sitting-on-chair.png'; ?>"
					alt="" />
			</div>
			<div class="grid
				grid-cols-2
				justify-items-center
				gap-y-[0.4rem]
				absolute
				bottom-0
				left-[50%]
				translate-x-[-50%]
				translate-y-[50%]
				cursor-pointer
			">
				<?php getSVG('assets/images/icons/icon-play-blue-rounded.svg', 'col-span-2'); ?>
				<?php getSVG('assets/images/icons/icon-play-line.svg', 'flex items-center justify-center'); ?>
				<span class="uppercase text-[1.2rem] font-fontBold text-primary ml-[-1rem]">Play video</span>
			</div>
		</div>
	</div>
</section>

<section class="section !mt-[15rem] md:!mt-[18rem] relative">
	<div class="section__container !px-0 md:!px-8 lg:!px-0">
		<div class="hidden md:block pt-16">
			<h3
				class="section__title section__title--light section__title--aligned-left-desktop section__title--yellow-pseudo-border-left-desktop">
				Cataract
				<br />
				<strong>
					Surgery prices
				</strong>
			</h3>
			<h3 class="font-fontLatoBold text-[4.8rem] ml-8 mt-12 text-[#51585B]">
				£2,400 per eye
			</h3>

			<h4 class="text-[2rem] leading-[3.2rem] font-fontLatoBold text-left mt-12 text-primary ml-8">
				Looking for finance options?
			</h4>

			<p class="font-[var(--font-medium)] leading-[2.4rem] text-[1.8rem] mt-[1.5rem] ml-8 max-w-[22.6rem]">
				We are here to make
				your
				treatment easy.
			</p>

			<button class="form__next-button button button--rounded-border mt-12 ml-8 !py-[1.5rem] !px-[5rem]"
				type="button">
				Find out more
				<?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
			</button>
		</div>

		<div class="
			w-full
			md:max-w-[40vmax]
			md:max-h-[55.4rem]
			lg:max-w-[50vmax]
			xl:max-w-[81.7rem]
			md:absolute
			md:right-0
			md:top-0
		">
			<div class="relative">
				<div class="better-eyes-for-better-life
					w-full
					ml-auto
					relative
					max-w-[33.7rem]
					sm:max-w-[45rem]
					before:w-full
					before:h-full
					before:content-['']
					before:absolute
					before:z-[-1]
					before:translate-x-[-7rem]
					before:bg-no-repeat
					before:bg-contain
					md:max-w-none
					md:relative
				">
					<h3 class="
						absolute
						z-10
						font-fontLatoBold
						text-[2.8rem]
						sm:text-[4rem]
						leading-[3.2rem]
						sm:leading-[4rem]
						text-left
						text-white
						bottom-[2rem]
						left-[4rem]
						md:top-2/4
						md:translate-y-[-50%]
						md:max-w-[32rem]
						md:text-[6.4rem]
						md:leading-[6.4rem]
						md:bottom-0
					">
						Better Eyes for A Better Life
					</h3>

					<div class="
						w-full
						max-w-[33.7rem]
						sm:max-w-[45rem]
						md:max-h-[55.4rem]
						md:max-w-[40vmax]
						lg:max-w-[50vmax]
						xl:max-w-[81.7rem]
						overflow-hidden
						rounded-tl-[var(--border-radius)]
						rounded-bl-[var(--border-radius)]
					">
						<img class="w-full h-full object-contain rounded-tl-[var(--border-radius)] rounded-bl-[var(--border-radius)]"
							src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/eye-ball.png'; ?>" alt="" />
					</div>
				</div>
			</div>
		</div>

		<div class="mx-8 mt-16 md:hidden">
			<h3 class="
			section__title
			section__title--light
			section__title--aligned-left-desktop
			section__title--yellow-pseudo-border-left-desktop
			">
				Cataract
				<br />
				<strong>
					Surgery prices
				</strong>
			</h3>

			<h3 class="font-fontLatoBold text-[2.8rem] sm:text-[4.8rem] ml-8 mt-12">
				£2,400 per eye
			</h3>

			<h4 class="text-[2rem] leading-[2.4rem] font-fontLatoBold text-left mt-12 text-primary ml-8">
				Looking for finance options?
			</h4>

			<p class="font-[var(--font-medium)] leading-[2.4rem] text-[1.6rem] mt-[1.5rem] ml-8">
				We are here to make
				your
				treatment easy.
			</p>

			<button class="form__next-button button button--rounded-border mt-12 ml-8 !py-[1.5rem] !px-[2.4rem]"
				type="button">
				Find out more
				<?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
			</button>
		</div>
	</div>
</section>

<section class="section !mt-[15rem] md:!mt-[18rem] relative overflow-x-clip md:overflow-x-visible">
	<div class="section__container
		md:grid
		md:grid-cols-2
		md:gap-[3rem]
		md:items-center
	">

		<div class="md:absolute md:left-0 md:top-0">
			<div class="pseudo-before-right-positioned
					w-full
					ml-0
					relative
					before:w-full
					before:h-full
					before:content-['']
					before:absolute
					before:z-[-1]
					before:translate-x-16
					before:bg-no-repeat
					before:bg-contain
					sm:max-w-[45rem]
					sm:max-h-max
					sm:before:translate-x-[10rem]
					md:max-w-none
				">
				<div class="
						w-full
						max-w-[32.74rem]
						max-h-[34rem]
						overflow-hidden
						sm:max-w-[45rem]
						sm:max-h-max
						md:max-w-[40vmax]
						lg:max-w-[50vmax]
						xl:max-w-[81.7rem]
					">
					<img class="
						w-full
						h-full
						object-contain
						rounded-[var(--border-radius)]
						md:hidden
					" src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/old-man-phone-calling.png'; ?>" alt="" />
					<img class="
						hidden
						md:block
						w-full
						h-full
						object-contain
						rounded-tl-[var(--border-radius)]
						rounded-bl-[var(--border-radius)]
						md:rounded-tl-none
					" src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/multiple-person.png'; ?>" alt="" />
				</div>
			</div>
		</div>

		<div class="col-span-1 col-start-2 mt-12 xl:mt-40">
			<h3 class="
			section__title
			section__title--light
			section__title--aligned-left-desktop
			section__title--yellow-pseudo-border-left-desktop
			">
				Living life again
				<br />
				<strong>
					with cataract-free vision!
				</strong>
			</h3>

			<div class="section__description !ml-0 md:!ml-8">
				<p class="text-align-left">
					Most patients are not aware of how bad their vision has become until after the cataract surgery and
					treatment.
				</p>
				<p class="text-align-left">
					Once they see the difference in brightness, colour, imagery and detail; they are delighted to
					experience their lifestyle activities again with the clear vision they should have always had.
				</p>
			</div>
		</div>

		<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-cataract-free-vision-cards.php'); ?>
	</div>
</section>

<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/cataract/template-enjoy-clear-vision.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/cataract/template-company-logos.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/cataract/template-modern-cataract-surgery.php'); ?>
<?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-faq.php'); ?>

<?php get_footer(); ?>
