<!-- #format-tailwind -->

<section class="section overflow-x-hidden sm:overflow-x-visible md:px-8 xl:!mt-[25rem]">
    <div
        class="section__container grid-flow flex flex-col-reverse overflow-hidden !px-0 md:grid md:grid-cols-2 md:rounded-[var(--border-radius)] md:bg-[#E5FAFF] xl:grid-cols-[1.5fr_1fr]"
    >
        <div class="bg-[#E5FAFF] px-[4.4rem] py-16 md:mt-32 md:px-[11rem] md:py-[13rem]">
            <h4
                class="mx-auto max-w-[33.2rem] font-fontLight text-[2.8rem] font-light leading-[3.2rem] text-[#061014] opacity-90 md:max-w-[50.8rem] lg:text-[4.8rem] lg:leading-[4.8rem]"
            >
                See at all distances without needing glasses or contact lenses ever again
            </h4>

            <div class="mt-[4.5rem] flex cursor-pointer flex-col items-center justify-center gap-[1.5rem]">
                <span class="text-8 text-center font-fontBold leading-[2.4rem] text-[#01D0FF]">Find out how</span>
                <?php getSVG('assets/images/icons/icon-arrow-line-blue-down.svg', 'h-[2.5rem]'); ?>
            </div>
        </div>

        <div class="ml-0 w-full px-8 md:px-0">
            <div
                class="w-full overflow-hidden rounded-tl-[var(--border-radius)] rounded-tr-[var(--border-radius)] md:h-full md:rounded-none"
            >
                <img
                    class="h-full max-h-[23.8rem] w-full object-cover md:max-h-max"
                    src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/ball-floating.png'; ?>"
                />
            </div>
        </div>
    </div>
</section>
