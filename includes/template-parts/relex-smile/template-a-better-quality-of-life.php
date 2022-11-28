<!-- #format-tailwind -->

<section class="section overflow-hidden rounded-primary bg-[#0085FF] md:rounded-none lg:h-[57.5rem]">
    <div
        class="section__container grid grid-cols-1 gap-12 !px-0 md:grid-cols-2 md:gap-20 md:!pl-8 lg:items-start xl:!pl-0"
    >
        <div
            class="relative flex flex-col items-start justify-start gap-[1.5rem] px-[2.6rem] pt-[7.4rem] md:justify-center md:px-0 md:py-16 lg:!mt-[9.7rem] lg:pt-0"
        >
            <h4
                class="w-full max-w-[33.5rem] text-left font-fontLatoLight text-[4rem] font-light leading-[4rem] text-white"
            >
                A better quality of life is just around the corner
            </h4>
            <p class="mt-12 text-left text-white">
                Have you or one of your loved ones finally decided to do something about being short-sighted or having
                astigmatism?
            </p>
            <p class="text-left text-white">
                To begin the ReLEx SMILE process, give us a call or book a consultation with our friendly team today
            </p>

            <div
                class="mt-[8.4rem] flex w-full flex-col items-center justify-center gap-[1.5rem] md:mt-[5.6rem] md:items-start md:gap-8 lg:flex-row lg:justify-start"
            >
                <button
                    class="form__next-button button button--rounded-border w-[25.3rem] !border-white !bg-white"
                    type="button"
                >
                    0208 445 8877
                    <?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
                </button>

                <button
                    class="form__next-button button button--rounded-border w-[25.3rem] !border-white !bg-[#0085FF] !text-white"
                    type="button"
                >
                    Book A Consultation
                    <?php getSVG('assets/images/icons/icon-arrow-right-white.svg'); ?>
                </button>
            </div>
        </div>

        <div
            class="w-full self-center rounded-tl-[var(--border-radius)] rounded-bl-[var(--border-radius)] md:translate-x-[1.5rem] md:self-end lg:absolute lg:right-0 lg:bottom-0 lg:max-h-[50rem] lg:max-w-[48rem] xl:top-2/4 xl:min-h-[56rem] xl:max-w-[65rem] xl:-translate-y-2/4"
        >
            <div class="relative">
                <div class="overflow-hidden">
                    <img
                        class="h-full w-full rounded-[var(--border-radius)] object-contain"
                        src="<?php echo MY_ICLINIC_PATH_URL .
                            'assets/images/feature/feature-better-quality-loving.png'; ?>"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
</section>
