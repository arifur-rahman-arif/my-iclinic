<!-- #format-tailwind -->

<section class="hero hero--glaucoma-page">
    <div class="hero__container">
        <div class="hero__title-container hero__title-container--cataract !w-full !max-w-[60.5rem]">
            <h1 class="hero__title !max-w-[49.1rem]" style="text-shadow: 1px 1px">
                Glaucoma Care and<br />Treatment Clinic
            </h1>

            <h2 class="hero__subtitle">
                <strong>Glaucoma Clinic London</strong>
            </h2>

            <h4 class="!mt-10 !ml-0">Affordable treatment &<br />management for your Glaucoma</h4>
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
