import './bootstrap';
import { createApp, defineAsyncComponent } from 'vue';

const app = createApp({});

app.component('TestPage',
    defineAsyncComponent(() => import('./components/TestPage.vue'))
);
app.component('MyHeader',
    defineAsyncComponent(() => import('./components/MyHeader.vue'))
);
app.component('LoginPage',
    defineAsyncComponent(() => import('./components/Login.vue'))
);


app.mount('#app');