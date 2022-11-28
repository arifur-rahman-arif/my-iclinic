<!-- #format-tailwind -->

<section class="hero hero--relex-smile">
    <div class="hero__container">
        <div class="hero__title-container hero__title-container--cataract !w-full !max-w-[60.5rem]">
            <h1 class="hero__title !max-w-[49.1rem]">Relex SMILE Laser Eye Surgery</h1>

            <h2 class="hero__subtitle">
                <strong>London’s latest laser<br />vision correction procedure</strong>
            </h2>

            <h4 class="pseudo-before">£2400 per eye</h4>
        </div>

        <div class="hero__image hero__image--mobile">
            <img src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/hero/hero-relex-smile-mobile.png'; ?>" alt="" />

            <?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-google-reviews.php', false); ?>
        </div>

        <?php load_template(MY_ICLINIC_PATH . 'includes/template-parts/template-google-reviews.php', false, [
            'modifiers' =>
        'pill-google-reviews--desktop', ]); ?>
    </div>
</section>
