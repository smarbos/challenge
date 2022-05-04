# Challenge Braintly

El challenge consiste en una serie de [test unitarios](https://es.wikipedia.org/wiki/Prueba_unitaria#:~:text=En%20programaci%C3%B3n%2C%20una%20prueba%20unitaria,orientado%20a%20objetos%20una%20clase.) que deben pasar correctamente. Para ello se entrega un archivo `tests.ts` (en Typescript) o `tests/BolsaDePapaNoelTest.php` (en PHP) que contiene los tests, y una clase `BolsaDePapaNoel.ts` (en Typescript) o `BolsaDePapaNoel.php` (en PHP) en donde tendrás que completar el código para hacer que los tests pasen correctamente.

Vas a tener que interpretar los tests para deducir el comportamiento del código y saber cómo programarlo.

El proyecto está hecho en 2 lenguajes. Podés elegir el que más te guste para entregarlo:
* [Deno](https://deno.land/) y el código está escrito en Typescript.
* PHP 8.0 y Composer

## Para el proyecto de Typescript
* Dentro del proyecto correr el comando:

    ```deno test```
    
## Para el proyecto de PHP
* Dentro debemos instalar las dependencias con:
    ```composer install```
* Y ejecutar los tests con:
    ```php ./vendor/bin/pest```
