import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/ascenso.css',
                'resources/css/equipo-tecnico.css',
                'resources/css/estilos.css',
                'resources/css/footer.css',
                'resources/css/form.css',
                'resources/css/inicio.css',
                'resources/css/modal.css',
                'resources/css/nav.css',
                'resources/css/news.css',
                'resources/css/app.css',
                'resources/css/preguntas.css',
                'resources/css/slider.css',
                'resources/css/swiper.css',
                'resources/css/view-resolutions.css',
                'resources/scss/styles.scss',
                'resources/js/app.js',
                'resources/js/action-buttons.js',
                'resources/js/ascenso.js',
                'resources/js/bootstrap.js',
                'resources/js/crud-personas.js',
                'resources/js/equipo-tecnico.js',
                'resources/js/form.js',
                'resources/js/lightbox.js',
                'resources/js/main.js',
                'resources/js/navs.js',
                'resources/js/questions.js',
                'resources/js/slider.js',
                'resources/js/tabs.js',
            ],
            refresh: true,
        }),
    ]
});
