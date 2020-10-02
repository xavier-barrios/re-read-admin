## Semana del 21 - 25 de septiembre del 2020 :white_check_mark:
Evolucionamos la página estática asociada al proyecto [reread](https://dannylarrea.github.io/reread "Proyecto HTML reread") a una página dinámica utilizando ```PHP``` y una [BBDD](https://github.com/dannylarrea/reread-php/blob/dev/db/reread.sql)
- Cambiamos la extensión de los ficheros .html a .php :bangbang: las rutas que se utilizan dentro de los ficheros también se han de cambiar!!
- Asociamos la base de datos con el proyecto, para ello creamos el **connection.php**
- Editamos el fichero **ebooks.php**: pintamos (con la ayuda del ```echo```) las [imágenes de los libros](https://github.com/dannylarrea/reread-php/tree/dev/img) recuperadas mediante una consulta en la base de datos

## Semana del 28 de septiembre - 2 de octubre del 2020 (evolutivo a desarrollar) :mega::mega:
**PHP**
1. Una vez realizado correctamente los cambios de la primera semana de clases, se ha de crear un **pull request** de ```dev → master``` para actualizar la rama master con el código final de dev
2. Hacer dinámico el apartado **Top ventas** (columna de la derecha):
    - Crear una nueva rama en GitHub para el desarrollo: **topventas** (recordad en local hacer ```git pull``` para bajar la rama)
    - Se ha de implementar este evolutivo en los tres ficheros .php:
        - index.php
        - libros.php
        - ebooks.php
3. Una vez realizado correctamente el desarrollo de **Top ventas**, se ha de crear un **pull request** de ```topventas → master``` para actualizar la rama master con el código final de topventas
4. Editar el registro con campo **Name** igual a **Varios autores** para añadir **Otros** en el campo **Country** (registro asociado a la tabla **Authors** de la base de datos utilizada en el proyecto)
5. En una nueva rama ```dev``` se ha de desarrollar la creación de un formulario dentro del fichero **ebooks.php** para filtrar ebooks por **autor** y **país**
![picture alt](https://raw.githubusercontent.com/dannylarrea/reread-php/dev/BackupRandom/form.png "formulario: autor y país")
6. Una vez realizado correctamente el desarrollo del formulario, se ha de crear un **pull request** de ```dev → master``` para actualizar la rama master con el código final de dev. Posteriormente, eliminar la rama dev (tanto en GitHub como en local)
7. Desarrollar, en una nueva rama ```form```, el siguiente evolutivo
![picture alt](https://raw.githubusercontent.com/dannylarrea/reread-php/dev/BackupRandom/form%20%2B%20title.png "formulario: autor, título y país")

- - - -
#### Recursos para escribir el fichero README.md:
- https://github.com/tchapi/markdown-cheatsheet
- https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md