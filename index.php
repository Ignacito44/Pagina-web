<?php


$seccion = $_GET['sec'] ?? "home";

$seccion = isset($_GET['sec']) ? $_GET['sec'] : "home";


$secciones_validas = [
  "home" => [
      "titulo" => "Bienvenido"
  ],
  "contacto" => [
      "titulo" => "Nuestro Contacto"
  ],
  "comidas" => [
      "titulo" => "Tipo de Comidas"
  ], 
  "comida" => [
    "titulo" => "Detalle del Producto"
  ],
  "nosotros" => [
    "titulo" => "Nosotros"
  ],
];


$seccion = $_GET['sec'] ?? "home";


/* Buscar si existe el array */

if (!array_key_exists($seccion, $secciones_validas)){
    $vista = "error";
    $titulo = "404 - Pagina No encontrada";
}else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   <!-- Navegacion -->
   <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?sec=home">Venta Comida</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?sec=home">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Comidas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?sec=comidas&ser=espana">España</a></li>
            <li><a class="dropdown-item" href="index.php?sec=comidas&ser=francia">Francia</a></li>
            <li><a class="dropdown-item" href="index.php?sec=comidas&ser=mexico">Mexico</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?sec=contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?sec=nosotros">Nosotros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Main -->
<main class="container">
    <?php

    require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";
    ?>

</main>


<!-- footer -->
<footer class="bg-primary text-white text-center p-4 mt-5">
    <p>Todos los derechos reservados - cfp20 - 2023</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
