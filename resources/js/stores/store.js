import { createStore } from "vuex";

/**
 *  Modules
 */
import { mobileMenuModule } from "./mobile-menu/module";


export default createStore({
    modules: {
        mobileMenu: mobileMenuModule,
    }
});
