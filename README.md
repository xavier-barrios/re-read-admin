## Semana del 19 - 23 de octubre del 2020 :mega::mega:
Evolucionamos el proyecto *reread-php* a ***reread-admin***:
- Modificamos el proyecto para que utilize el patrón de diseño MVC (utilizamos el desarrollo login-MVC).
- Utilizamos el desarrollo asociado a sesiones.
- Estructura de directorios y ficheros que ha de tener al final del desarrollo el nuevo proyecto:
    ```

    ```
Algunos pasos de desarrollo:
- Desarrollar en una nueva rama ```dev``` el evolutivo.
- Añadir un enlace a login en el fichero ```index.php```:
    ```HTML
    <!--HTML a modificar en index.php-->
    <div class="logo"><h1>Re-Read</h1><h1 style="float: right;"><a href="view/login.php">Login</a></h1></div>
    ```
    ```CSS
    /* Estilos a modificar/crear en css/styles.css */
    .logo {
        background-color: #0B5345;
        color: white;
        padding: 5px;
        font-size: 10px;
        overflow: hidden;
    }

    .logo h1 {
        float: left;
        display: block;
    }

    .logo a {
        text-decoration: none;
        color: white;
    }
    ```
- En el apartado **M7: PHP** del Moodle, dentro de la carpeta **Materials**, se encuentran dos ficheros:
    1. **login.php** (su ubicación en el nuevo proyecto ha de ser ```view/login```).
    2. **re-read-tienda.jpg** (su ubicación en el nuevo proyecto ha de ser ```img/```).
- Añadir los siguientes estilos al CSS:
    ```CSS
    /* Two columns (CSS)*/
    .column.left,
    .column.right {
        width: 50%;
        font-size: 15px;
    }
    ````
    ```CSS
    /* ...Responsive layout (CSS media queries)... */
    .column.right{
        display: none;
    }
    .column.left{
        width: 100%;
    }
    ```
- Extender la base de datos para utilizar usuarios en la aplicación. Dentro de la carpeta **Materials**, se encuentra la base de datos a importar (**reread-admin.sql** ya contiene la sentencia ```CREATE DATABASE```).
- Para el apartado **Top ventas** (```index.php```, ```libros.php``` y ```ebooks.php```) se ha de utilizar:
    ```PHP
    $query = "SELECT Books.Title FROM Books WHERE eBook != '0'";
    $sentencia=$pdo->prepare($query);
    ...
    ...
    ```
- Una vez realizado, y visto que funcione, el apartado Top ventas, se ha de crear una función llamada ```topVentas($pdo)``` en el fichero ```model/functions.php``` que devuelva un string con el HTML asociado:
    - HTML asociado a la lista de libros, o
    - 0 resultados
- Dentro del fichero ```ebooks.php``` se ha de modificar la sección de filtros y la muestra de registros para que utilice la conección con ```$pdo```.
- ...
