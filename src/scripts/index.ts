// Import the main style file
import '../scss/main.scss';

// Import the modules
import Navbar from './modules/navbar';
import Stepper from './modules/stepper';
import SwiperInitiator from './modules/swiper';

// Initiate the modules
new Navbar();
new SwiperInitiator();
new Stepper();
