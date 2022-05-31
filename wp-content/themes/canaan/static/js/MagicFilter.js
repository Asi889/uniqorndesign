import { createApp } from 'vue';
import FilterApp from './vue/FilterApp.vue';

class MagicFilter {
    constructor(wrapper, options) {
        console.log(wrapper);
        const app = createApp(FilterApp);
        app.mount(".magic-filter-wrapper");
    }
}

export { MagicFilter };