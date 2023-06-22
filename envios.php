<?php

/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */


$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$telefono= $_POST['tel'];
$email= $_POST["email"];
$mensaje= $_POST["mensaje"];


echo "<p> El dato del campo nombre es: " . $nombre . "<br>";
echo "<p> El dato del campo apellido es: " . $apellido . "<br>";
echo "<P> El dato del campo telefono es: " . $telefono . "<br>";
echo "<p> Su email es: " . $email . "<br>";
echo "<p> Su mensaje es: " . $mensaje . "<br>";
"<br>";
echo "<h1> Gracias Por inscribirte en nuestra pagina :) </h1> ";

?>
<img src="img/bana.jpg" alt="">
