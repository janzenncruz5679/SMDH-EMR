import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/css/app.css",
                "node_modules/@fortawesome/fontawesome-free/js/all.min.js",
            ],
            refresh: true,
        }),
    ],
});
