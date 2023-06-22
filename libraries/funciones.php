<?php
function catalogo_completo(): array
{
    return [ 
        [
            "id" =>  1,
            "paism" => "espana",
            "pais" => "España",
            "nombre" => "garbanzos",
            "tipo" => "comida",
            "sabor" => "salado",
            "imagen" => "Española/Garbanzo.jpg",
            "precio" => 25.35
        ],

        [
      "id" =>  2,
            "paism" => "espana",
            "pais" => "España",
            "nombre" => "monafascua",
            "tipo" => "comida",
            "sabor" => "dulce",
            "imagen" => "Española/MonaPascua.jpg",
            "precio" => 10.45
        ],

        [
            "id" =>  3,
            "paism" => "espana",
            "pais" => "España",
            "nombre" => "patatasfritas",
            "tipo" => "comida",
            "sabor" => "salado",
            "imagen" => "Española/PatatasFritas.jpg",
            "precio" => 1.45
        ],

        [
            "id" =>  4,
            "paism" => "espana",
            "pais" => "España",
            "nombre" => "tortilla",
            "tipo" => "comida",
            "sabor" => "salada",
            "imagen" => "Española/Tortilla.jpg",
            "precio" => 9.25
        ],

        [
            "id" =>  5,
            "paism" => "francia",
            "pais" => "francia",
            "nombre" => "buñuelosbacalao",
            "tipo" => "comida",
            "sabor" => "salada",
            "imagen" => "Francesa/BuñuelosBacalao.jpg",
            "precio" => 42.4
        ],   

        [

            "id" =>  6,
            "paism" => "francia",
            "pais" => "francia",
            "nombre" => "crepes",
            "tipo" => "comida",
            "sabor" => "dulce",
            "imagen" => "Francesa/Crepes.jpg",
            "precio" => 42.4
        ],

        [

            "id" =>  7,
            "paism" => "francia",
            "pais" => "francia",
            "nombre" => "croquetasjamon",
            "tipo" => "comida",
            "sabor" => "salado",
            "imagen" => "Francesa/CroquetasJamon.jpg",
            "precio" => 3.9
        ],
        [

            "id" =>  8,
            "paism" => "francia",
            "pais" => "francia",
            "nombre" => "sopacebolla",
            "tipo" => "comida",
            "sabor" => "salado",
            "imagen" => "Francesa/SopaCebolla.jpg",
            "precio" => 12.9
        ],
        [

            "id" =>  9,
            "paism" => "mexico",
            "pais" => "mexico",
            "nombre" => "chile",
            "tipo" => "comida",
            "sabor" => "salado",
            "imagen" => "Mexicana/Chile.jpg",
            "precio" => 2.9
        ],
        [

            "id" =>  10,
            "paism" => "mexico",
            "pais" => "mexico",
            "nombre" => "cochinilla",
            "tipo" => "comida",
            "sabor" => "salado",
            "imagen" => "Mexicana/Cochinilla.jpg",
            "precio" => 2.9
        ],
        [

            "id" =>  11,
            "paism" => "mexico",
            "pais" => "mexico",
            "nombre" => "mezcal",
            "tipo" => "bebida",
            "sabor" => "alchol",
            "imagen" => "Mexicana/Mezcal.jpg",
            "precio" => 2.9
        ],
        [

            "id" =>  12,
            "paism" => "mexico",
            "pais" => "mexico",
            "nombre" => "quesadilla",
            "tipo" => "comida",
            "sabor" => "salado",
            "imagen" => "Mexicana/Quesadilla.jpg",
            "precio" => 2.9
        ],



    ];


}

function catalogo_x_marcas(string $pais) :array {
    $resultado = [];
    $catalogo = catalogo_completo();

    foreach ($catalogo as $m) {
        if($m['paism'] == $pais){
           //agregar elementos al array (push)
           $resultado[] = $m;
        }
    }
    return $resultado;
}

function productos_x_id($idcomida) {
    $catalogo = catalogo_completo();

    foreach ($catalogo as $m) {
        if ($m['id'] == $idcomida) {
            return $m;
        }
    }
    return null;
}



?>