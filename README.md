#Lista de productos

Este proyecto fue construido en Laravel 10 usando Tailwind CSS con ViteJS.

## Tecnologias usadas
- **Laravel 10**
- **Tailwind CSS**
- **MySQL**

## Requerimientos
Para poder hacer uso de la aplicación debemos configurar nuestro proyecto debemos configurar nuestro archivo ```.env```
y tener instalado xampp u otro paquete, al igual que PHP 8.2 y NodeJS 19. Xampp ya viene con PHP 8.2 y composer.

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

![This is an image](/images/database.png)


![This is an image](/images/datos.png)


![This is an image](/images/diagram.png)


![This is an image](/images/Screenshot%202023-02-27%20151841.png)



