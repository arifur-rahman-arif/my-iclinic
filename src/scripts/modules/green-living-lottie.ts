import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/dist/ScrollTrigger';

class GreenLivingLottie {
    animationElement: any;

    constructor() {
        // Grab the elements
        this.animationElement = document.getElementById('lottie-green-living');

        this.events();
    }

    events() {
        gsap.registerPlugin(ScrollTrigger);

        gsap.timeline({
            scrollTrigger: {
                trigger: this.animationElement,
                start: 'top 65%',
                // markers: true,
                onEnter: (parameters: any) => {
                    this.animationElement?.play();
                }
            }
        });
    }
}

export default GreenLivingLottie;
