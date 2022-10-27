<!-- #format-tailwind -->

<section class="hero hero--premium-lenses">
    <div class="hero__container">
        <div class="hero__title-container hero__title-container--cataract !w-full !max-w-[60.5rem]">
            <h1 class="hero__title !max-w-[49.1rem]">Freedom from Glasses after Cataract Surgery</h1>

            <h2 class="hero__subtitle">
                <strong>Be Glasses free <br />After cataract surgery</strong>
            </h2>

            <div class="mt-[5.5rem] ml-4 flex flex-wrap items-center justify-start gap-[3.5rem]">
                <h3 class="pseudo-before relative !text-[1.6rem] !leading-8 text-[#003C55] before:!w-[0.4rem]">EDOF</h3>
                <h3 class="pseudo-before relative !text-[1.6rem] !leading-8 text-[#003C55] before:!w-[0.4rem]">
                    Multifocals
                </h3>
                <h3 class="pseudo-before relative !text-[1.6rem] !leading-8 text-[#003C55] before:!w-[0.4rem]">
                    Monofocal
                </h3>
                <h3 class="pseudo-before relative !text-[1.6rem] !leading-8 text-[#003C55] before:!w-[0.4rem]">
                    Presbyond
                </h3>
            </div>
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
