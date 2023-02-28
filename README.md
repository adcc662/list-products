#Lista de productos

Este proyecto fue construido en Laravel 10 usando Tailwind CSS con ViteJS.

## Tecnologias usadas
- **Laravel 10**
- **Tailwind CSS**
- **MySQL**

## Requerimientos
Para poder hacer uso de la aplicación debemos configurar nuestro proyecto debemos configurar nuestro archivo ```.env```
y tener instalado xampp u otro paquete, al igual que PHP 8.2 y NodeJS 19. Xampp ya viene con PHP 8.2 y composer.
Para tomar como base nuestro ```.env.example``` usamos el comando ```cp .env.example .env```

## Comandos para la hacer uso de la aplicación
Usamos los comandos:
```composer require```
para instalar todas las dependencias de php. Nos saldrá un mensaje pero simplemente damos enter y seguimos con el flujo.

```npm install``` para tener todas nuestras dependencias de NodeJS instaladas. 

Ya que seguimos los pasos anteriores y teenemos nuestra conexión a la base de datos hacemos uso de 
```php artisan migrate``` 

esto creara la base de datos en MySQL.

En mi caso hice uso de la librería Fake para crear datos falsos y asi poder hacer la prueba mas rápida.

Después de hacer la migración usamos el comando:
```php artisan migrate:refresh --seed```

para que inserte los datos en la base de datos.

Corremos nuestra aplicación usando:
```php artisan serve``` y 

```npm run dev``` 

esto hara que se haga uso de nuestros estilos en la ruta y entramos con ```localhost:8000/products``` y empezamos a probar.

## Docker
Intente hacerlo con docker, pero tengo un problema con los estilos de Tailwind, la aplicación hace su tarea pero no se aplican los estilos debido a un asunto con ViteJS, lo pueden probar usando el comando:
```docker-compose up```

En este caso algunas veces se tiene un problema con la cache y se puede solucionar con el comando:
```docker exec -it jsonresume-manager-php-1 php artisan config:cache```

También un problema de permisos con sessions o algo por el estilo y con eso usamos el comando para dar permisos:
```sudo chmod -R 777 storage/``` tambien se puede sin ```sudo```.

Ahora vamos a hacer un docker ps y se mostrarán los siguientes contenedores:
![This is an image](/images/contenedores_2.png)

Vamos a hacer las migraciones dentro del que tiene php:
```docker exec -it list-products-php-1 php artisan migrate```

Voy a dejar un archivo llamado ```.env.example_docker``` donde va a estar toda la configuración y se renombra y se pone ```.env```.

Para ejecutar las migraciones es similar al comando de arriba solo que con la siguiente variación:
```docker exec -it list-products-php-1 php artisan migrate:refresh --seed```

En teoría de Node ya no se debería correr nada pero debido al problema con ViteJS y Tailwind no carga los estilos como en las imagenes de abajo.





![This is an image](/images/database.png)


![This is an image](/images/datos.png)


![This is an image](/images/diagram.png)


![This is an image](/images/Screenshot%202023-02-27%20151841.png)



