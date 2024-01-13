<?php include 'includes/header.php';

$nombreCliente = "Miguel Vasquez";

echo strlen($nombreCliente);
var_dump($nombreCliente);

$texto = trim($nombreCliente);
echo strlen($texto);

echo strtoupper($nombreCliente);

echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Miguel', 'M', $nombreCliente);

echo strpos($nombreCliente, 'Vasquez');

$tipoCliente = "Premium";
echo "El Cliente " . $nombreCliente, " es " . $tipoCliente;

echo "EL Cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';