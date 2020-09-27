## Semana del 21 - 25 de septiembre 2020. Evolucionamos la página estática asociada al proyecto reread a una página dinámica utilizando php i una base de datos :loudspeaker:
1. Cambiamos la extensión de los ficheros .html a .php -> las rutas que se utilizan dentro de los ficheros también se han de cambiar!!
2. Asociamos la base de datos con el proyecto: ./services/connection.php
3. Traemos (select) y pintamos (echo) las imágenes de los libros mediante una consulta a la base de datos en el fichero ebooks.php

## Lunes 28 de septiembre 2020. Evolutivo a desarrollar :loudspeaker:
1. Una vez finalizado correctamente los cambios de la primera semana de clases, se ha de crear un pull request de dev -> master para actualizar la rama master con el código final
2. Hacer dinámico el apartado de Top ventas de la columna de la derecha:
2.1 Crear una nueva rama: topventas
2.2 Query a utilizar: SELECT Books.Title FROM Books WHERE Top = '1'
2.3 Se ha de implementar este evolutivo en los tres ficheros .php: index.php, libros.php y ebooks.php
