import {
    aos,
    swiper,
    cf7,
    header_mega_menu,
    mobileMenu,
} from './components/index';


const Tbc = {
    init() {
        aos();
        swiper();
        cf7();
        header_mega_menu();
        mobileMenu();
    }
};

export default Tbc;

Tbc.init();
