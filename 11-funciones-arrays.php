<?php include 'includes/header.php';

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));

$numeros = array(1,3,4,5,1,2);
sort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Miguel'

];
krsort($cliente);

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';