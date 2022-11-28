<!-- #format-tailwind -->

<section class="section section--request-calback md:min-h-[71rem]" id="request-call-back-form">
    <form class="form form--request-callback">
        <div id="form-scroll-start-point"></div>

        <h3 class="form__title">Call back request</h3>

        <div class="form-input-wrapper">
            <div class="form__input-wrapper">
                <label class="form__label" for="name"
                    >Name
                    <span class="input-required">*</span>
                </label>
                <input class="form__input" type="text" name="name" id="name" />
            </div>

            <div class="form__input-wrapper">
                <label class="form__label" for="name"
                    >Phone number
                    <span>(Optional)</span>
                </label>
                <input class="form__input" type="text" name="phone" id="phone" />
            </div>

            <div class="form__input-wrapper">
                <label class="form__label" for="name"
                    >Email
                    <span class="input-required">*</span>
                </label>
                <input class="form__input" type="text" name="email" id="email" />
            </div>

            <div class="form__input-wrapper form__input-wrapper--radio-input">
                <div>
                    <input type="radio" name="any-date" value="any-date" id="any-date" checked />
                    <label class="form__label form__label--radio-input-label" for="any-date">Any date</label>
                </div>
                <div>
                    <label class="form__label form__label--radio-input-label form__label--date-picker" for="any-date">
                        <?php getSVG('assets/images/icons/icon-calender-yellow-bg.svg'); ?>
                        <span>Pick a date</span>
                    </label>
                    <input type="date" class="hidden" name="date" id="date" />
                </div>
            </div>

            <div class="form__input-wrapper form__input-wrapper--radio-input">
                <div>
                    <input type="radio" name="time-range" value="flexible" id="flexible" checked />
                    <label class="form__label form__label--radio-input-label" for="flexible">Flexible</label>
                </div>
                <div>
                    <input type="radio" name="time-range" value="morning" id="morning" />
                    <label class="form__label form__label--radio-input-label" for="morning">Morning</label>
                </div>
                <div>
                    <input type="radio" name="time-range" value="afternoon" id="afternoon" />
                    <label class="form__label form__label--radio-input-label" for="afternoon">Afternoon</label>
                </div>
            </div>

            <div class="flex w-full items-center justify-start gap-[1.5rem]">
                <input
                    id="remember-me"
                    name="remember-me"
                    type="checkbox"
                    class="h-[2.4rem] w-[2.4rem] border-[#697072] accent-brand"
                />
                <label for="remember-me" class="font-fontMedium text-[1.6rem] leading-[2.4rem] text-[#697072]"
                    >I accept the
                    <a
                        href="#"
                        class="text-[#0085FF] hover:underline hover:decoration-[#0085FF] hover:underline-offset-8"
                        >terms and conditions</a
                    >
                </label>
            </div>

            <button class="form__next-button button button--rounded-border js-btn-next !max-w-[25.3rem]" type="button">
                <?php getSVG('assets/images/icons/icon-phone-dark.svg'); ?>
                Request a call back
                <?php getSVG('assets/images/icons/icon-arrow-right.svg'); ?>
            </button>
        </div>
    </form>
</section>
