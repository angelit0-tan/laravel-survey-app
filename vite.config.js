import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue()
    ],
    resolve: {
        alias: {
            '@js': '/resources/js',
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
    server:{
        port: 5173, // vite port
        host: 'survey_app',          // app host
        origin: 'http://localhost:5173', // vite host
        cors: {
            origin: 'http://localhost:1295'
        },
    },
});
