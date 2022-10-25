// Import the main style file
import '../styles/main.scss';
import Accordion from './modules/accordion';
import Faq from './modules/faq';

// Import bootstrap utilities & components
// import { Accordion } from 'bootstrap';
// Import the modules
import Navbar from './modules/navbar';
import Stepper from './modules/stepper';
import SwiperInitiator from './modules/swiper';

// Initiate the modules
new Navbar();
new SwiperInitiator();
new Stepper();
new Accordion();
new Faq();
