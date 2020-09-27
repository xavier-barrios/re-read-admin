<!DOCTYPE html>
<html lang="en">
<head>
<title>Re-Read ebooks</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">

</head>
<body>

<div class="logo"><h1>Re-Read</h1></div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

<div class="row">
  <div class="column middle">
    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="ebooks.php" class="active">eBooks</a>
    </div>
    <div class="textpage">
      <h3>Toda la actualidad en eBook</h3>
      <!--
      <div class="gallery">
        <img src="../img/cell.jpeg" alt="Cell">
        <div class="desc">A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
      </div>
      -->
      <?php
      // 1. Conexión con la base de datos	
      include '../services/connection.php';

      // 2. Selección y muestra de datos de la base de datos
      $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != '0'");

      if (!empty($result) && mysqli_num_rows($result) > 0) {
      // datos de salida de cada fila	(fila = row)	
        while ($row = mysqli_fetch_array($result)) {
          echo "<div class='gallery'>";
          // Añadimos la imagen a la página con la etiqueta img de HTML
          echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
          // Añadimos el título a la página con la etiqueta h2 de HTML
          //echo "<div class='desc'".$row['Title']." </div>";
          echo "</div>";
        }
      } else {
        echo "0 resultados";
      }
      ?>
    </div>
  </div>
  <div class="column side">
    <h2>Top ventas</h2>
    <p>Cien años de soledad.</p>
    <p>Crónica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto.</p>
  </div>
</div>
  
</body>
</html>
