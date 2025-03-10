# Instalación del Proyecto

Para instalar el proyecto, sigue estos pasos:

## Clonar el repositorio

```bash
git clone https://github.com/AlexisGonzalez20/test-products.git
```
Este comando clona el repositorio remoto en tu máquina local, creando una copia de todo el proyecto.

## Acceder al directorio del proyecto

```bash
cd ./test-products
```
Una vez dentro del directorio del proyecto, ejecuta el siguiente comando.

## Instalar dependencias de PHP

```bash
composer install
```
Este comando instala todas las dependencias de PHP enumeradas en el archivo composer.json, necesarias para que el proyecto funcione correctamente.

## Instalar dependencias de JavaScript

```bash
npm install
```
Este comando instala todas las dependencias de JavaScript enumeradas en el archivo package.json, necesarias para que el proyecto funcione correctamente.

## Configurar el archivo de entorno

Copia el archivo .env.example y renómbralo a .env. Configura tus credenciales en este archivo.

## Generar la clave de la aplicación

```bash
php artisan key:generate
```
Este comando genera una clave de aplicación única y la coloca en el archivo .env, lo cual es esencial para la seguridad y el cifrado de la aplicación Laravel.

## Ejecutar las migraciones de la base de datos

```bash
php artisan migrate
```
Este comando ejecuta todas las migraciones pendientes en la base de datos, creando o modificando las tablas según lo especificado en los archivos de migración del proyecto.

¡Con todo esto en su lugar, ya estamos listos para comenzar a realizar pruebas con la API!

Para empezar ejecuta:

```bash
php artisan serve
```
