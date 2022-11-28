<!-- #format-tailwind -->

<section class="section overflow-x-hidden sm:overflow-x-visible md:px-8">
    <div
        class="section__container grid-flow flex flex-col-reverse overflow-hidden !px-0 md:grid md:grid-cols-2 md:rounded-[var(--border-radius)] md:bg-[#E5FAFF] xl:grid-cols-[1.5fr_1fr]"
    >
        <div class="bg-[#E5FAFF] px-[4.4rem] py-16 md:mt-32 md:px-[11rem] md:py-[13rem]">
            <h3
                class="mx-auto max-w-[33.2rem] font-fontLight text-[2.8rem] font-light leading-[3.2rem] text-[#061014] opacity-90 md:max-w-[50.8rem] lg:text-[4.8rem] lg:leading-[4.8rem]"
            >
                YAG Laser Treatment after Cataract Surgery
            </h3>

            <div class="mt-[4.5rem] flex cursor-pointer flex-col items-center justify-center gap-[1.5rem]">
                <span class="text-8 text-center font-fontBold leading-[2.4rem] text-[#01D0FF]">How we do</span>
                <?php getSVG('assets/images/icons/icon-arrow-line-blue-down.svg', 'h-[2.5rem]'); ?>
            </div>
        </div>

        <div class="ml-0 w-full px-8 md:px-0">
            <div
                class="w-full overflow-hidden rounded-tl-[var(--border-radius)] rounded-tr-[var(--border-radius)] md:h-full md:rounded-none"
            >
                <img
                    class="hidden h-full max-h-[23.8rem] w-full object-cover md:block md:max-h-max"
                    src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/women-holding-blanket.png'; ?>"
                />

                <img
                    class="h-full max-h-[23.8rem] w-full object-cover md:hidden md:max-h-max"
                    src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/women-holding-blanket-mobile.png'; ?>"
                />
            </div>
        </div>
    </div>
</section>
