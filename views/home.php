<?php

require_once "libraries/funciones.php";

$comidas = catalogo_completo();



?>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Banner/banner1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Banner/banner2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Banner/banner3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<H1 class= "text-center mt-2">Todos nuestras comidas</H1>

<div class="row mt-5">

        <?php foreach ($comidas as $comida) { ?>


    <div class="col-4 mb-3">
    <div class="card">
  <img style="height:400px;"src="img/<?= $comida['imagen'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title" ><?= $comida['nombre'] ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $comida['tipo'] ?></h6>
    <p class="card-text text-success">Precio: <?= number_format($comida['precio'], 3) ?></p>
    <a href="index.php?sec=comida&id= <?= $comida['id'] ?>" class="btn btn-success d-block py-3">Ver Mas</a>
  </div>
</div>
    </div>
    <?php  } ?>

</div>
