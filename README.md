## Semana del 21 - 25 de septiembre 2020 :white_check_mark:
Evolucionamos la página estática asociada al proyecto reread a una página dinámica utilizando php i una base de datos
- Cambiamos la extensión de los ficheros .html a .php :bangbang: las rutas que se utilizan dentro de los ficheros también se han de cambiar!!
- Asociamos la base de datos con el proyecto, para ello creamos el **connection.php**
- Traemos (select) y pintamos (echo) las imágenes de los libros mediante una consulta a la base de datos en el fichero **ebooks.php**

## Lunes 28 de septiembre 2020. Evolutivo a desarrollar :loudspeaker:
1. Una vez realizado correctamente los cambios de la primera semana de clases, se ha de crear un pull request de ```hash**dev → master**```para actualizar la rama **master** con el código final de **dev**
2. Hacer dinámico el apartado de Top ventas de la columna de la derecha:
    - Crear una nueva rama para el desarrollo: **topventas**
    - Query a utilizar en el desarrollo:
    ```sql
    SELECT Books.Title FROM Books WHERE Top = '1'
    ```
    - Se ha de implementar este evolutivo en los tres ficheros .php: index.php, libros.php y ebooks.php

### Recursos para escribir el fichero README.md:
- https://github.com/tchapi/markdown-cheatsheet
- https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md