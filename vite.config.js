import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/common.css',
                'resources/css/landing.css',
                'resources/css/support.css',
                'resources/css/contact.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
