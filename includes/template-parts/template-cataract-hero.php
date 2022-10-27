<!-- #format-tailwind -->

<section class="hero hero--cataract">
    <div class="hero__container">
        <div class="hero__title-container hero__title-container--cataract">
            <h1 class="hero__title">
                Private Cataract<br />
                Surgery London
            </h1>

            <h2 class="hero__subtitle">
                <strong> We’re here to make cataract surgery easy </strong>
            </h2>

            <h4 class="pseudo-before">£2400 per eye</h4>
        </div>

        <div class="hero__image hero__image--mobile">
            <img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/hero/hero-cataract-mobile.png'; ?>" alt="" />

            <?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-google-reviews.php', false); ?>
        </div>

        <?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-google-reviews.php', false, [
            'modifiers' =>
        'pill-google-reviews--desktop', ]); ?>
    </div>
</section>
