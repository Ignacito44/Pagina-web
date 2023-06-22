<?php
require_once "libraries/funciones.php";

$id = $_GET['id'] ?? FALSE;

$comida = productos_x_id($id);


?>

<!-- 
<p class="card-text">Año: <?= $comida['tipo'] ?></p>
    <p class="card-text">Potencia: <?= $comida['sabor'] ?></p>
-->

    <?php  if (isset($comida)){ ?>
        <h1 class="text-center my-5"><?= $comida['nombre'] ?> </h1>

        <div class="col">
                <div class="card mb-4">
                    <div class="row">
                        <div class="col-5">
                            <img class="img-fluid" src="img/<?= $comida['imagen'] ?>" alt="">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <p class="fs-4 m-0 fw-bold text-danger"><?= $comida['pais']?>   
                                <p>
                                    <h2 class="card-tittle fs-2 mb-4"><?= $comida['tipo']?></h2>
                            </div>
                            <ul class="list-group">
    <p class="card-text">Pais: <?= $comida['pais'] ?></p>
    <p class="card-text">Nombre: <?= $comida['nombre'] ?></p>
    <p class="card-text">Tipo: <?= $comida['tipo'] ?></p>
    <p class="card-text">Sabor: <?= $comida['sabor'] ?></p>
</ul>
<div class="card-body mt-auto">
    <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= number_format($comida['precio'],1, ",", ".")?></div>
    <a href="#" class="btn btn-success w-100 fw-bold">Comprar</a>
                            </div>
                        </div>
                    </div>

                </div>
        </div>



    <?php   } ?>


