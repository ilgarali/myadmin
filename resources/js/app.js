import { createApp } from 'vue';
import router from './router'

import Dashboard from './components/Dashboard';

createApp({
    components: {
        Dashboard
    }
}).use(router).mount('#app')