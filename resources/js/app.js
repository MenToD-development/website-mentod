import { createApp } from "vue";

/**
 *  Store with modules
 */
import store from "./stores/store";

const application = createApp({});

application.use(store);

application.mount('#app');

