<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

if($autenticado || $admin){
    echo "Usuario Autenticado Correctamente";
} else{
    echo "El Usuario no Existe";
}

$cliente = [
    'nombre' => 'Miguel',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

echo "<br>";

if( !empty($cliente)){
    echo "No hay información del cliente.";

    if($cliente ['saldo'] > 0){
        echo "Si hay saldo";
    }else{
        echo "No tiene saldo";
    }
}
 echo "<br>";

if($cliente['saldo']){
    echo "El cliente tiene saldo";
} else if($cliente['informacion'] ['tipo'] === 'Premium'){
    echo "El cliente es Premium";
} else{
    echo "No hay cliente definido o no es Premium o no tiene saldo";
}
echo "<br>";

$tecnologia = "HTML";

switch($tecnologia){
    case "PHP":
        echo "PHP, Un exelente lenguaje!";
    break;

    case "JavaScript":
        echo "Fino Señores, el lenguaje de la Web";
    break;

    case "HTML":
        echo "Eso no es un lenguaje de programacion";
    break;

    default:
        echo "Algun otro lenguaje que no se";
    break;
}


include 'includes/footer.php';