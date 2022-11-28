class SwiperInitiator {
    bodyWidth: number | undefined;
    serviceSwiper: any;
    cataractSwiper: any;
    visionCardsSwiper: any;

    constructor() {
        this.bodyWidth = document.body?.clientWidth;
        this.serviceSwiper = null;

        // @ts-ignore
        new Swiper('.swiper__container--hero', {
            grabCursor: true,
            // autoHeight: true,
            effect: 'fade',
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction'
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });

        this.events();
    }

    /**
     * Initialize all the events
     * @memberof SwiperInitiator
     */
    events() {
        window.addEventListener('resize', () => {
            this.activateSwiper();
            this.activateVisionCardsSwiper();
        });
        document.addEventListener('DOMContentLoaded', () => {
            this.activateSwiper();
            this.activateVisionCardsSwiper();
        });

        this.initiateCataractSwiper();
    }

    /**
     * Activate the What is important to you section swiper
     * @memberof SwiperInitiator
     */
    activateSwiper() {
        this.bodyWidth = document.body?.clientWidth;

        if (this.bodyWidth > 640) {
            this.serviceSwiper?.destroy(true, true);
        } else {
            if (this.serviceSwiper) return;

            // @ts-ignore
            this.serviceSwiper = new Swiper('.swiper--service-swiper', {
                slidesPerView: 'auto',
                // autoplay: {
                //     delay: 3000,
                //     disableOnInteraction: false
                // },
                grabCursor: true,
                centeredSlides: false,
                spaceBetween: 15,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                }
            });
        }
    }

    initiateCataractSwiper() {
        // @ts-ignore
        this.cataractSwiper = new Swiper('.swiper--cataract-swiper', {
            effect: 'cards',
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction'
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    }

    /**
     * Activate the Vision cards in cataract page in mobile view mode
     * @memberof SwiperInitiator
     */
    activateVisionCardsSwiper() {
        this.bodyWidth = document.body?.clientWidth;

        if (this.bodyWidth > 640) {
            this.visionCardsSwiper?.destroy(true, true);
        } else {
            if (this.visionCardsSwiper) return;

            // @ts-ignore
            this.visionCardsSwiper = new Swiper('.free-vision-cards', {
                slidesPerView: 'auto',
                // autoplay: {
                //     delay: 3000,
                //     disableOnInteraction: false
                // },
                grabCursor: true,
                centeredSlides: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                }
            });
        }
    }
}

export default SwiperInitiator;
