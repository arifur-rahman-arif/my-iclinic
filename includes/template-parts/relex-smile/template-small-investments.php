<!-- #format-tailwind -->

<section class="section">
    <div class="section__container grid grid-cols-1 items-center gap-16 md:grid-cols-2 lg:gap-36">
        <!-- Item 1 -->
        <div class="row-start-2 md:row-start-auto">
            <h4
                class="ml-0 mb-4 max-w-[31.2rem] text-left font-fontBold text-[2rem] leading-8 text-[#003C55] sm:text-[2.8rem] sm:leading-[3.2rem] md:ml-8 md:mb-8"
            >
                Relex Surgery Finance
            </h4>

            <h3
                class="section__title section__title--light section__title--aligned-left-desktop section__title--yellow-pseudo-border-left-desktop"
            >
                A small investment for
                <br />
                <strong>Permanent, clear vision!</strong>
            </h3>

            <div class="section__description">
                <p class="text-align-left">
                    <strong class="text-[2rem]">SMILE Laser Treatment</strong>
                    <br />
                    Is the most technically advanced option for people who want the latest and greatest vision
                    correction option, and long-term vision without any eye health risks.
                </p>

                <p class="text-align-left">
                    <strong class="text-[2rem]">Glasses</strong>
                    <br />
                    Are an old and costly technology to improve vision.
                </p>

                <p class="text-align-left">
                    <strong class="text-[2rem]">Contact lenses </strong>
                    <br />
                    Were the glasses alternative, but have a lot of serious consequences for your eye health as you grow
                    older.
                </p>

                <button
                    class="form__next-button button button--rounded-border js-btn-next mx-auto mt-[4.5rem] !max-w-[25.3rem] md:mt-24 md:ml-0"
                    type="button"
                >
                    See fincance options
                    <?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
                </button>
            </div>
        </div>

        <!-- Item 2 -->
        <div
            class="flex w-full flex-col items-center justify-start gap-[5.6rem] overflow-hidden rounded-primary bg-white pb-[4.3rem] drop-shadow-primary md:max-w-[61rem] md:self-start"
        >
            <div class="h-[31.7rem] w-full lg:h-[53rem]">
                <img
                    class="h-full w-full object-cover"
                    src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/lady-doctor-counselling.png'; ?>"
                    alt=""
                />
            </div>
            <h3 class="font-fontLatoBold text-[2.8rem] leading-[3.2rem]">0% Finance option</h3>
        </div>
    </div>
</section>
