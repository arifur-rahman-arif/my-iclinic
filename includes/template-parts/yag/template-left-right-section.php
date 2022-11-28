<!-- #format-tailwind -->

<section class="section">
    <div class="section__container">
        <!-- Mobile view -->
        <div class="accordion accordion mobile-to-tablet-view">
            <!-- Item #1 -->
            <div class="accordion__item accordion__item--active">
                <div class="accordion__header">
                    <?php getSVG(
                        'assets/images/icons/icon-number-line-blue-1.svg',
                        'accordion__item-icon accordion__item-icon--lined-icon'
                    ); ?>
                    <h4 class="title">Consultation</h4>
                    <?php getSVG('assets/images/icons/icon-arrow-right.svg', 'icon-arrow-right'); ?>
                </div>

                <div class="accordion__description">
                    <div class="section__description">
                        <div class="image-wrapper mt-16 mb-12 grid place-items-center">
                            <img
                                class="simple-process-image !object-contain"
                                src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/yag-consultation.png'; ?>"
                                alt=""
                            />
                        </div>

                        <p>
                            After having your cataract surgery, some people may experience PCO symptoms 1-5 years after
                            treatment. This is completely normal and nothing to worry about.
                        </p>
                        <p>
                            Once you have had treatment to permanently get rid of any blurry vision, your natural vision
                            will restore and PCO will never return again. This is due to the thickening of the capsule
                            in your eye. This haze can be removed by the use of our YAG Laser treatment in just 60
                            seconds!
                        </p>
                    </div>
                </div>
            </div>
            <!-- End of item #1 -->

            <!-- Item #2 -->
            <div class="accordion__item">
                <div class="accordion__header">
                    <?php getSVG(
                        'assets/images/icons/icon-number-line-blue-2.svg',
                        'accordion__item-icon accordion__item-icon--lined-icon'
                    ); ?>
                    <h4 class="title">Treatment</h4>
                    <?php getSVG('assets/images/icons/icon-arrow-right.svg', 'icon-arrow-right'); ?>
                </div>

                <div class="accordion__description">
                    <div class="section__description">
                        <div class="image-wrapper mt-16 mb-12 grid place-items-center">
                            <img
                                class="simple-process-image !object-contain"
                                src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/yag-treatment.png'; ?>"
                                alt=""
                            />
                        </div>

                        <p>
                            Our YAG laser is a completely painless treatment. This laser is used to create a visual
                            pathway in the center of the capsule that is thickening and clouding your vision. This will
                            support the lens implant again, restoring the vision you had previously.
                        </p>
                        <p>
                            This laser is attached to a slit-lamp microscope and is used to divide the thickened
                            membranes in your eye. Apart from affecting your vision (blurriness, glare), the thickening
                            does not damage the eye in any way. The laser is also harmless, you may only experience
                            blurred vision after the procedure which is completely normal. This can take up to a few
                            hours to clear.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End of item #2 -->

            <!-- Item #3 -->
            <div class="accordion__item">
                <div class="accordion__header">
                    <?php getSVG(
                        'assets/images/icons/icon-number-line-blue-3.svg',
                        'accordion__item-icon accordion__item-icon--lined-icon'
                    ); ?>
                    <h4 class="title">Aftercare</h4>
                    <?php getSVG('assets/images/icons/icon-arrow-right.svg', 'icon-arrow-right'); ?>
                </div>

                <div class="accordion__description">
                    <div class="section__description">
                        <div class="image-wrapper mt-16 mb-12 grid place-items-center">
                            <img
                                class="simple-process-image !rounded-tl-[7.5rem] !rounded-tr-primary !rounded-br-[7.5rem] !rounded-bl-primary !object-contain"
                                src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/after-care.png'; ?>"
                                alt=""
                            />
                        </div>

                        <p>
                            Because YAG Laser treatment is very efficient a follow-up appointment with our specialists
                            is not required unless you are having treatment for another eye condition. Once you have had
                            the procedure you will have a recovery period of 1-2 days.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End of item #3 -->
        </div>

        <!-- Items are visible from tablet size devices -->

        <!-- Item #1 -->
        <div class="tablet-view simple-process !mt-0">
            <div class="simple-process__item simple-process__item--reverse !justify-between">
                <div class="item-left">
                    <div class="section__description !ml-auto !max-w-[48.5rem]">
                        <div class="simple-process__header flex-wrap">
                            <?php getSVG(
                                'assets/images/icons/icon-number-line-blue-1.svg',
                                'simple-process-icon--lined-icon'
                            ); ?>
                        </div>

                        <h3
                            class="size-[3.2rem] mt-8 text-left font-fontBold leading-[3.6rem] text-[#061014E5] opacity-90"
                        >
                            Consultation
                        </h3>

                        <div class="mt-12">
                            <p>
                                Our ReLEX SMILE Laser Treatment is the most technically advanced option for people who
                                want the latest and greatest vision correction option to treat any blurriness,
                                astigmatism and short-sightedness.
                            </p>
                            <p>
                                When you have a laser consultation, our specialists will conduct a number of eye tests
                                in order to examine all the factors involved in correcting your eyesight. Your laser
                                specialist will be able to offer the best possible course of treatment to correct your
                                vision. Your Relex smile Laser assessment is an all-inclusive FREE consultation, with no
                                obligation to have treatment if you wish to have some time to consider your options.
                            </p>
                            <p>
                                Need to talk to a specialist before booking a Laser consultation? If you are unsure if
                                you are suitable for Relex Smile laser treatment, you can attend a FREE suitability
                                check with our laser specialist. They will talk you through your prescription history
                                and the best treatment options we offer for vision correction.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item-right">
                    <div class="image-wrapper image-wrapper--extended-size">
                        <img
                            class="simple-process-image !object-contain"
                            src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/yag-consultation.png'; ?>"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End of item #1 -->

        <!-- Item #2 -->
        <div class="tablet-view simple-process !mt-0">
            <div class="simple-process__item !grid grid-cols-2 !justify-between">
                <div class="item-left justify-self-start">
                    <div class="section__description !ml-auto !max-w-[48.5rem]">
                        <div class="simple-process__header flex-wrap">
                            <?php getSVG(
                                'assets/images/icons/icon-number-line-blue-2.svg',
                                'simple-process-icon--lined-icon'
                            ); ?>
                        </div>

                        <h3
                            class="size-[3.2rem] mt-8 text-left font-fontBold leading-[3.6rem] text-[#061014E5] opacity-90"
                        >
                            Treatment
                        </h3>

                        <div class="mt-12">
                            <p>
                                Our YAG laser is a completely painless treatment. This laser is used to create a visual
                                pathway in the center of the capsule that is thickening and clouding your vision. This
                                will support the lens implant again, restoring the vision you had previously.
                            </p>
                            <p>
                                This laser is attached to a slit-lamp microscope and is used to divide the thickened
                                membranes in your eye. Apart from affecting your vision (blurriness, glare), the
                                thickening does not damage the eye in any way. The laser is also harmless, you may only
                                experience blurred vision after the procedure which is completely normal. This can take
                                up to a few hours to clear.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item-right">
                    <div class="image-wrapper image-wrapper--extended-size !ml-0">
                        <img
                            class="simple-process-image !object-contain"
                            src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/yag-treatment.png'; ?>"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Item #2 -->

        <!-- Item #3 -->
        <div class="tablet-view simple-process !mt-0">
            <div class="simple-process__item simple-process__item--reverse !justify-between">
                <div class="item-left">
                    <div class="section__description !ml-auto !max-w-[48.5rem]">
                        <div class="simple-process__header flex-wrap">
                            <?php getSVG(
                                'assets/images/icons/icon-number-line-blue-3.svg',
                                'simple-process-icon--lined-icon'
                            ); ?>
                        </div>

                        <h3
                            class="size-[3.2rem] mt-8 text-left font-fontBold leading-[3.6rem] text-[#061014E5] opacity-90"
                        >
                            Aftercare
                        </h3>

                        <div class="mt-12">
                            <p>
                                Because YAG Laser treatment is very efficient a follow-up appointment with our
                                specialists is not required unless you are having treatment for another eye condition.
                                Once you have had the procedure you will have a recovery period of 1-2 days.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item-right">
                    <div class="image-wrapper image-wrapper--extended-size">
                        <img
                            class="simple-process-image !rounded-tl-[7.5rem] !rounded-tr-primary !rounded-br-[7.5rem] !rounded-bl-primary !object-contain"
                            src="<?php echo MY_ICLINIC_PATH_URL . 'assets/images/feature/after-care.png'; ?>"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End of item #3 -->
    </div>
</section>
