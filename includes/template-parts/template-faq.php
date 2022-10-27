<!-- #format-tailwind -->
<section class="section faq">
    <div class="section__container !max-w-[90rem]">
        <h3 class="section__title section__title--light">
            Frequently asked
            <br />
            <strong> Questions </strong>
        </h3>

        <div class="section__description">
            <p class="!text-[2rem] !leading-[3.6rem]">Have a question? We’r here to help.</p>
        </div>

        <div class="relative mx-auto mt-16 max-w-[44.3rem]">
            <input
                class="faq__search-input w-full rounded-[12rem] border-[0.1rem] border-[#001A20] py-8 px-12 font-fontMedium outline-none"
                type="text"
                name="search-faq"
                id="search-faq"
            />
            <label
                for="search-faq"
                class="faq__search-label pointer-events-none absolute top-2/4 left-2/4 flex translate-x-[-50%] translate-y-[-50%] items-center justify-center gap-[1.5rem]"
            >
                <?php echo getSVG('assets/images/icons/icon-search-outline.svg'); ?>
                <span> I am looking for ... </span>
            </label>
        </div>

        <!-- FAQ list -->
        <ul class="mt-16 flex flex-col gap-16">
            <li class="faq__item grid cursor-pointer grid-cols-2">
                <h4
                    class="pointer-events-none col-span-1 self-center text-left font-fontBold text-[2rem] leading-[2.4rem]"
                >
                    What is a cataract?
                </h4>
                <span class="faq-icon faq-icon--active pointer-events-none col-span-1 justify-self-end"></span>

                <p
                    class="faq__short-description faq__short-description--active mt-[1.5rem] font-fontMedium first-line:pointer-events-none"
                >
                    Just behind the pupil of your eye is the eye’s lens...
                </p>

                <div
                    class="faq__description faq__description--active pointer-events-none col-span-2 col-start-1 mt-12 max-w-[70rem]"
                >
                    <p class="pointer-events-none font-fontMedium">
                        Just behind the pupil of your eye is the eye’s lens. Usually, the lens of the eye is crystal
                        clear so that when light passes through it easily, you have bright, clear sight. However, if any
                        cloudiness develops in the eye’s lens, its starts to block any light passing through. This is a
                        sign you might be developing cataracts which can cause the following symptoms in your everyday
                        sight:
                    </p>
                </div>
            </li>

            <li class="faq__item grid cursor-pointer grid-cols-2">
                <h4
                    class="pointer-events-none col-span-1 self-center text-left font-fontBold text-[2rem] leading-[2.4rem]"
                >
                    What is a cataract?
                </h4>

                <span class="faq-icon pointer-events-none col-span-1 justify-self-end"></span>

                <p class="faq__short-description pointer-events-none mt-[1.5rem] font-fontMedium">
                    Just behind the pupil of your eye is the eye’s lens...
                </p>

                <div class="faq__description pointer-events-none col-span-2 col-start-1 mt-12 max-w-[70rem]">
                    <p class="pointer-events-none font-fontMedium">
                        Just behind the pupil of your eye is the eye’s lens. Usually, the lens of the eye is crystal
                        clear so that when light passes through it easily, you have bright, clear sight. However, if any
                        cloudiness develops in the eye’s lens, its starts to block any light passing through. This is a
                        sign you might be developing cataracts which can cause the following symptoms in your everyday
                        sight:
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
