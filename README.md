# 🚀 Guía de Instalación del Proyecto 🚀

Hola compañeros a continuación,vamos a configurar y ejecutar nuestro proyecto de la fase 2 en su entorno local.

## Requisitos Previos
🖥️ Asegúrate de tener un entorno de desarrollo local con PHP y MySQL. Puedes utilizar XAMPP, MAMP u otro software similar.

### Paso 1: Clonar el Repositorio
📦 Clona este repositorio en el directorio htdocs (en XAMPP) o www (en otros servidores web locales) utilizando el siguiente comando:

git clone git@github.com:felingac/Phase2.git
### Paso 2: Importar el Script SQL
🗃️ Importa el archivo SQL proporcionado en tu sistema de gestión de bases de datos (por ejemplo, phpMyAdmin) para crear la base de datos.
### Paso 3: Configurar el archivo .env
🛠️ Abre el archivo .env en la raíz del proyecto y ajusta la configuración de la base de datos según la que configuraste en el paso anterior:

database.default.hostname = localhost
database.default.database = tu_basededatos
database.default.username = tu_usuario
database.default.password = tu_contraseña

### Paso 4: Configurar la URL Base
🌐 En el archivo .env, asegúrate de ajustar la variable app.baseURL con la URL local que configuraste en tu entorno de desarrollo, por ejemplo:

app.baseURL = http://localhost/tu_proyecto/

### Paso 5: Ejecutar el Proyecto
⚙️ Abre un navegador web y accede a la URL local que configuraste en el paso anterior. Deberías poder ver y usar el proyecto 

¡Listo! Ahora tienes el proyecto configurado y en funcionamiento en tu entorno local.



# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
