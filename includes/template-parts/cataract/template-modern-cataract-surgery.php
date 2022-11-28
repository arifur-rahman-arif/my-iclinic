<!-- #format-tailwind -->

<section class="section px-8">
    <div
        class="section__container documents-download-form grid-col-1 grid w-full !max-w-[100.2rem] gap-[2.5rem] bg-white !px-0 md:grid-cols-2 md:rounded-[var(--border-radius)] md:shadow-[0_0.4rem_2.5rem_rgba(0,0,0,0.15)]"
    >
        <!-- Grid Item #1 -->
        <div
            class="flex flex-col items-center justify-start rounded-[var(--border-radius)] bg-[#E6FAFF] py-12 px-8 md:max-w-[43.9rem] md:rounded-tl-[var(--border-radius)] md:rounded-bl-[var(--border-radius)] md:rounded-tr-none md:rounded-br-none"
        >
            <div>
                <?php getSVG(
                    'assets/images/feature/eye-testing-letters.svg',
                    'documents-download-form__feature-image'
                ); ?>
            </div>
            <h3 class="mt-8 text-center font-fontBold text-[2.8rem] leading-[3.2rem]">
                Get the guide to Modern Cataract Surgery
            </h3>
            <ul class="mt-12 flex w-full flex-col items-start justify-start gap-[1.5rem] pb-12 pl-[7.5rem]">
                <li class="flex items-start justify-start gap-4">
                    <?php getSVG(
                        'assets/images/icons/icon-check-grey.svg',
                        'cataract-vision-free-cards-icon mt-[0.4rem]'
                    ); ?>
                    <p class="text-left font-fontMedium text-[1.6rem]">
                        Learn everything you need to know about cataracts
                    </p>
                </li>
                <li class="flex items-start justify-start gap-4">
                    <?php getSVG(
                        'assets/images/icons/icon-check-grey.svg',
                        'cataract-vision-free-cards-icon mt-[0.4rem]'
                    ); ?>
                    <p class="text-left font-fontMedium text-[1.6rem]">Understand your treatment options</p>
                </li>
                <li class="flex items-start justify-start gap-4">
                    <?php getSVG(
                        'assets/images/icons/icon-check-grey.svg',
                        'cataract-vision-free-cards-icon mt-[0.4rem]'
                    ); ?>
                    <p class="text-left font-fontMedium text-[1.6rem]">Know how modern cataract surgery works</p>
                </li>
                <li class="flex items-start justify-start gap-4">
                    <?php getSVG(
                        'assets/images/icons/icon-check-grey.svg',
                        'cataract-vision-free-cards-icon mt-[0.4rem]'
                    ); ?>
                    <p class="text-left font-fontMedium text-[1.6rem]">
                        Be one step closer to wonderfully clear vision
                    </p>
                </li>
            </ul>
        </div>

        <!-- Grid Item #2 -->
        <div
            class="rounded-[var(--border-radius)] bg-white px-4 py-12 drop-shadow-primary md:pr-[7rem] md:pt-[7rem] md:pb-[6rem] md:drop-shadow-none"
        >
            <form class="form px-4">
                <div id="form-scroll-start-point"></div>

                <div class="form-input-wrapper">
                    <div class="form__input-wrapper">
                        <label class="form__label" for="name"
                            >Name
                            <span class="input-required">*</span>
                        </label>
                        <input
                            class="form__input placeholder:font-fontMedium"
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Your name"
                        />
                    </div>

                    <div class="form__input-wrapper">
                        <label class="form__label" for="name"
                            >Email
                            <span class="input-required">*</span>
                        </label>
                        <input
                            class="form__input placeholder:font-fontMedium"
                            type="text"
                            name="email"
                            id="email"
                            placeholder="Your address"
                        />
                    </div>

                    <h3 class="w-full text-left font-fontBold text-[2rem]">Gender (Optional)</h3>

                    <div class="form__input-wrapper flex flex-col items-start justify-start gap-8">
                        <div>
                            <input type="radio" name="gender" value="unknown" id="unknown" checked />
                            <label class="form__label form__label--radio-input-label !font-fontMedium" for="unknown"
                                >Prefer not to say</label
                            >
                        </div>
                        <div>
                            <input type="radio" name="gender" value="male" id="male" />
                            <label class="form__label form__label--radio-input-label !font-fontMedium" for="male"
                                >Male</label
                            >
                        </div>
                        <div>
                            <input type="radio" name="gender" value="female" id="female" />
                            <label class="form__label form__label--radio-input-label !font-fontMedium" for="female"
                                >Female</label
                            >
                        </div>
                    </div>

                    <button class="form__next-button button button--rounded-border js-btn-next !px-20" type="button">
                        <?php getSVG('assets/images/icons/icon-cloud-download-outline.svg'); ?>
                        Download
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
