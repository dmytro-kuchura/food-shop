import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue2";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/app.js',
                'resources/css/admin.scss',
                'resources/js/admin.js',
            ],
            refresh: true,
        }),
        vue()
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm.js",
            "~": "/resources/js",
        },
    },
});
