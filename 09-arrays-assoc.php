<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Miguel',
    'saldo' => '200',
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';