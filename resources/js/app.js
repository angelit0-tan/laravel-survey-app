import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue';

const app = createApp({});

app.component('TestPage',
    defineAsyncComponent(() => import('./components/TestPage.vue'))
);

app.mount('#app');