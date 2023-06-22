<?php

require_once "libraries/funciones.php";

$comidaSeleccionada = $_GET['ser'] ?? FALSE;

$productos = catalogo_x_marcas($comidaSeleccionada);

$miTitulo = $comidaSeleccionada ? ucwords(str_replace("_", " ", $comidaSeleccionada)) : FALSE;


?>

<H1 class= "text-center mt-2"> <?= $miTitulo ?> </H1>

<div class="row mt-5">

<?php if(count($productos)) { ?>
<?php foreach ($productos as $comida) { ?>

    <div class="col-6">
    <div class="card">
  <img style="height:400px;"src="img/<?= $comida['imagen'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title" ><?= $comida['nombre'] ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $comida['tipo'] ?></h6>
    <p class="card-text text-success">Precio: <?= number_format($comida['precio'], 1) ?></p>
    <a href="index.php?sec=comida&id= <?= $comida['id'] ?>" class="btn btn-success d-block py-3">Ver Mas</a>
    </div>
  </div>
</div>

    <?php  } ?>
    <?php } else { ?>

      <div class="col">
        <h2 class="text-center mb-5" style="color: red">No se encontraron productos</h2>
      </div>
<?php } ?>

</div>