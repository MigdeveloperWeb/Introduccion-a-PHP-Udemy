<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo $carrito[2];

$carrito[3] = 'Nuevo Producto';

array_push($carrito, 'Audifonos');

array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';