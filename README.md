<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


---
# Instalación de Laravel con Inertia.js, Vue.js, Vuetify y Vite

## 1️. Instalación de Laravel

Primero, instala Laravel:
```sh
composer global require laravel/installer
```
Referencia: [Laravel Installer](https://laravel.com/docs/10.x/installation)

Crea un nuevo proyecto Laravel:
```sh
laravel new MiProyecto
cd MiProyecto
```
O con Composer:
```sh
composer create-project laravel/laravel:^10.0 MiProyecto
cd MiProyecto
```
Configura el entorno:
```sh
cp .env.example .env
php artisan key:generate
```
Ejecuta el servidor:
```sh
php artisan serve
```

## 2️. Instalar Inertia.js con Vue.js

Instala Inertia:
```sh
composer require inertiajs/inertia-laravel
```
Referencia: [Inertia.js Docs](https://inertiajs.com/server-side-setup)

Instala Vue e Inertia:
```sh
npm install @inertiajs/vue3 vue@3
```
Publica la configuración de Inertia:
```sh
php artisan inertia:middleware
```
Agrega al Kernel (`app/Http/Kernel.php`):
```php
protected $middleware = [
    \App\Http\Middleware\HandleInertiaRequests::class,
];
```

## 3️. Configurar Vite con Vue

Instala los paquetes:
```sh
npm install vue@3 @vitejs/plugin-vue
```
Modifica `vite.config.js`:
```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
});
```
Referencia: [Vite & Laravel](https://laravel.com/docs/10.x/vite)

## 4️. Configurar Vue y Inertia

### Configura `app.js` en `resources/js/app.js`
```js
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import '../css/app.css';

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
```

### Crea `resources/js/Pages/Home.vue`
```vue
<template>
    <div>
        <h1>Bienvenido a Laravel con Inertia y Vue</h1>
    </div>
</template>
```

### Configura `routes/web.php`
```php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});
```

## 5. Instalar Vuetify

Instala Vuetify:
```sh
npm install vuetify
```
Referencia: [Vuetify Docs](https://vuetifyjs.com/en/getting-started/installation/)

Modifica `app.js`:
```js
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import '../css/app.css';
import { createVuetify } from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

const vuetify = createVuetify();

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(vuetify)
            .mount(el);
    },
});
```


Modifica `app.blade.php`:o crealo dentro de la carpeta resources/views/ . Aqui estamos incrustando las etiquetas de InertiaJS dentro de nuestro punto de entrada a la 'APP'
```html

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>


```

## 6. Compilar y Ejecutar el Proyecto

Ejecuta Vite para compilar los assets:
```sh
npm run dev
```
Para desarrollo continuo:
```sh
npm run watch
```
Ejecuta Laravel:
```sh
php artisan serve
```
Ahora visita `http://127.0.0.1:8000` 🚀

## 📌 Resumen de Archivos Modificados
- `vite.config.js` → Configura Vite con Vue.
- `resources/js/app.js` → Inicializa Inertia, Vue y Vuetify.
- `resources/js/Pages/Home.vue` → Página inicial con Vue.
- `routes/web.php` → Define la ruta de Inertia.
- `app/Http/Kernel.php` → Registra el Middleware de Inertia.

Con esto, Laravel + Inertia + Vue.js + Vuetify + Vite quedan listos. 🚀
