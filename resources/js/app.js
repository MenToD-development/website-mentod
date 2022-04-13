import { createApp } from "vue";
import { mapActions } from "vuex";
import SmoothScroll from 'smooth-scroll';

/**
 *  Store with modules
 */
import store from "./stores/store";
import { TOGGLE_ACTION } from "./stores/mobile-menu/actions";

/**
 *  Components
 */
import MobileMenu from "./components/MobileMenu";
import MobileMenuSwitch from "./components/MobileMenuSwitch";


window.addEventListener('load', () => {
    const scroll = new SmoothScroll('a[href*="#"]');
});

const application = createApp({
    methods: {
        ...mapActions('mobileMenu', [
            TOGGLE_ACTION,
        ]),
    }
});

application.use(store);

application.component('mobile-menu', MobileMenu);
application.component('mobile-menu-switch', MobileMenuSwitch);

application.mount('#app');

