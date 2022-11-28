<!-- #format-tailwind -->

<section class="hero">
    <div class="hero__container">
        <div class="hero__title-container">
            <h1 class="hero__title">Laser eye <br />surgery</h1>

            <h2 class="hero__subtitle">
                <strong> Can change it all </strong>
            </h2>
        </div>

        <div class="hero__image hero__image--mobile">
            <img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/hero/hero-image-mobile.jpg'; ?>" alt="" />

            <?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-google-reviews.php', false); ?>
        </div>

        <!-- Swiper -->
        <div class="swiper swiper--hero">
            <!-- Swiper -->
            <div class="swiper__container swiper__container--hero">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide--no-opacity swiper-slide--hero-swiper">
                        <div class="avater">
                            <img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/avaters/lady..png'; ?> " alt="" />
                        </div>
                        <div class="swiper-review">
                            <div class="swiper-review__header">
                                <h3 class="swiper-review__title">Ms. H</h3>
                                <div class="swiper-review__stars flex items-center justify-center">
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                </div>
                            </div>
                            <div class="swiper-review__description">
                                Miss Odufuwa removed both cataracts at the same time with excellent results. The staff
                                are efficient and friendly and I would not hesitate in recommending My-iClinic for their
                                excellent care.
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide--no-opacity swiper-slide--hero-swiper">
                        <div class="avater">
                            <img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/avaters/lady..png'; ?> " alt="" />
                        </div>
                        <div class="swiper-review">
                            <div class="swiper-review__header">
                                <h3 class="swiper-review__title">Ms. D</h3>
                                <div class="swiper-review__stars flex items-center justify-center">
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                    <?php getSVG('assets/images/icons/icon-star-green.svg'); ?>
                                </div>
                            </div>
                            <div class="swiper-review__description">
                                Miss Odufuwa removed both cataracts at the same time with excellent results. The staff
                                are efficient and friendly and I would
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
                <?php getSVG('assets/images/icons/icon-chat.svg', 'button__icon'); ?>
                Chat with us
            </a>
        </div>

        <?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-google-reviews.php', false, [
            'modifiers' =>
        'pill-google-reviews--desktop', ]); ?>
    </div>
</section>
