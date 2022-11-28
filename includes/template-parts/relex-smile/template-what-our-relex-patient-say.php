<!-- #format-tailwind -->

<section class="section bg-[#E6FAFF]">
    <div
        class="section__container grid grid-cols-1 gap-12 !px-0 md:min-h-[72rem] md:grid-cols-2 md:gap-20 md:!pl-8 xl:!pl-0"
    >
        <div
            class="relative flex flex-col items-start justify-start gap-12 px-[2.6rem] pt-[8.9rem] md:justify-center md:px-0 md:pt-0"
        >
            <h4 class="w-full max-w-[33.5rem] text-left font-fontLatoLight text-[4.8rem] font-light leading-[4.8rem]">
                You are in a safe hand
            </h4>
            <p class="text-left">
                When you choose My-iClinic’s 5-star rated services, you can rest assured that you’ve made the best
                possible choice for your eyesight. Our specialist optometrists carefully work with you to evaluate your
                eyes to offer you the best possible course of treatment – allowing you to re-discover a life of normal
                vision.
            </p>

            <?php getSVG(
                'assets/images/icons/icon-pin-dark.svg',
                'absolute top-0 left-2/4 -translate-x-2/4 z-[1] h-[5.8rem] md:hidden'
            ); ?>
            <?php getSVG(
                'assets/images/icons/icon-large-pin-dark.svg',
                'absolute top-0 left-2/4 -translate-x-2/4 z-[1] h-[19.3rem] hidden md:block'
            ); ?>
        </div>

        <div
            class="w-full self-center rounded-tl-[var(--border-radius)] rounded-bl-[var(--border-radius)] bg-[#09455d] lg:absolute lg:right-0 lg:top-2/4 lg:max-h-[50rem] lg:max-w-[48rem] lg:-translate-y-2/4 xl:min-h-[56rem] xl:max-w-[65rem]"
        >
            <h3
                class="mb-12 ml-8 mt-[3.1rem] max-w-[35.5rem] pr-4 text-left font-fontLatoBold text-[2.8rem] leading-[3.2rem] text-white sm:max-w-[50.2rem] sm:text-[4rem] sm:leading-[4rem] md:mt-[4rem] lg:ml-[5.4rem]"
            >
                What our cataract patients Say after treatment
            </h3>
            <div class="relative mt-[2rem] px-5 md:mt-[3.3rem]">
                <div class="overflow-hidden pb-[3rem] md:translate-x-[-2.8rem]">
                    <img
                        class="h-full w-full rounded-[var(--border-radius)] object-contain"
                        src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/doctor-sitting-on-chair.png'; ?>"
                        alt=""
                    />
                </div>
                <div
                    class="absolute bottom-0 left-[50%] grid translate-x-[-50%] translate-y-[41%] cursor-pointer grid-cols-2 justify-items-center gap-y-[0.4rem]"
                >
                    <?php getSVG('assets/images/icons/icon-play-blue-rounded.svg', 'col-span-2'); ?>
                    <?php getSVG('assets/images/icons/icon-play-line.svg', 'flex items-center justify-center'); ?>
                    <span class="ml-[-1rem] font-fontBold text-[1.2rem] uppercase text-primary">Play video</span>
                </div>
            </div>
        </div>
    </div>
</section>
