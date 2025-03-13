import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue';

const app = createApp({});

app.component('TestPage',
    defineAsyncComponent(() => import('./components/TestPage.vue'))
);
app.component('NavMenu',
    defineAsyncComponent(() => import('./components/NavMenu.vue'))
);
app.component('MyHeader',
    defineAsyncComponent(() => import('./components/MyHeader.vue'))
);


app.mount('#app');