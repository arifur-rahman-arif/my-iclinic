// Import the main style file
import '../styles/main.scss';
// Import 3rd party libraries
import gsap from 'gsap';

window.gsap = gsap as GSAP;

// export gsap;
import Accordion from './modules/accordion';
import Faq from './modules/faq';

// Import the modules
import Navbar from './modules/navbar';
import Stepper from './modules/stepper';
import SwiperInitiator from './modules/swiper';
import GreenLivingLottie from './modules/green-living-lottie';

// Initiate the modules
new Navbar();
new SwiperInitiator();
new Stepper();
new Accordion();
new Faq();
new GreenLivingLottie();
