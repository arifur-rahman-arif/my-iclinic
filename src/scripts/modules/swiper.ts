class SwiperInitiator {
    bodyWidth: number | undefined;
    serviceSwiper: any;

    constructor() {
        this.bodyWidth = document.body?.clientWidth;
        this.serviceSwiper = null;

        // @ts-ignore
        new Swiper('.swiper__container', {
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
        window.addEventListener('resize', this.activateSwiper);
        document.addEventListener('DOMContentLoaded', this.activateSwiper);
    }

    /**
     * Activate the What is important to you section swiper
     * @param {Event} event
     * @memberof SwiperInitiator
     */
    activateSwiper(event: Event) {
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
}

export default SwiperInitiator;
