<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# SGCA - Sistema de Gestión y Control de Asistencias

SGCA es una aplicación web construida con el framework Laravel y tecnologías modernas de frontend como Vite y Tailwind CSS. Este documento proporciona una guía completa para instalar, configurar y ejecutar el sistema en un entorno de desarrollo local.

## Requisitos del sistema

Antes de comenzar, asegúrate de tener instalado lo siguiente en tu entorno:

- PHP versión 8.1 o superior
- Composer (gestor de dependencias de PHP)
- Node.js versión 16 o superior
- NPM o Yarn (gestores de paquetes JavaScript)
- MySQL o MariaDB (como sistema gestor de base de datos)
- Git (para clonar el repositorio)

## Pasos para la instalación y ejecución

1. Clona el repositorio del proyecto en tu máquina utilizando Git. Una vez clonado, navega dentro del directorio principal del proyecto: git clone <REPO_URL>


2. Instala las dependencias necesarias para el backend mediante Composer. Este comando descargará todos los paquetes requeridos por Laravel: composer install


3. Instala las dependencias del frontend utilizando NPM. Esto incluye Vite, Tailwind y otros paquetes para la interfaz: npm install


4. Copia el archivo `.env.example` y renómbralo como `.env`. Este archivo contendrá la configuración del entorno, incluyendo conexión a la base de datos y claves de la aplicación: cp .env.example .env


5. Genera la clave de la aplicación. Laravel requiere una clave única para cifrado interno, la cual se puede generar automáticamente con el siguiente comando: php artisan key:generate


6. Configura la conexión a la base de datos editando el archivo `.env` con tus credenciales de MySQL o MariaDB. Asegúrate de que la base de datos especificada ya esté creada:

B_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=nombre_de_tu_bd 
DB_USERNAME=tu_usuario 
DB_PASSWORD=tu_contraseña

7. Ejecuta las migraciones para crear las tablas necesarias en la base de datos. Si el proyecto cuenta con seeders para datos de prueba, puedes incluirlos también: php artisan migrate


8. Levanta el servidor de desarrollo de Laravel utilizando Artisan. Esto te permitirá acceder a la aplicación desde el navegador: php artisan serve


9. En una terminal aparte, ejecuta el proceso de desarrollo del frontend. Este comando iniciará Vite, que compilará los archivos de JavaScript y CSS, y los actualizará automáticamente al realizar cambios: npm run dev


10. Finalmente, abre tu navegador y accede a la siguiente URL para ver la aplicación en funcionamiento: npm run dev



## Estructura general del proyecto

- `app/`: Lógica de la aplicación, incluyendo modelos, controladores y servicios.
- `routes/`: Archivos que definen las rutas web y API.
- `resources/`: Contiene las vistas Blade, archivos SCSS/CSS y JS del frontend.
- `public/`: Carpeta pública del servidor donde se sirve la aplicación.
- `database/`: Migraciones, seeders y factories.
- `config/`: Archivos de configuración del framework y los paquetes.
- `tests/`: Pruebas automatizadas para el proyecto.

## Notas finales

Este proyecto está pensado para ser ejecutado en un entorno local de desarrollo. Si planeas desplegarlo en un servidor de producción, asegúrate de configurar adecuadamente aspectos como cache, logs, seguridad, backups y variables de entorno. Puedes adaptar esta guía según tus necesidades o entorno específico.


