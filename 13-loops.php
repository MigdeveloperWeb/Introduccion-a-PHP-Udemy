<?php include 'includes/header.php';

// $i = 0;

// while($i < 10){
//     echo $i . "<br>";

//     $i++;
// }

// echo "<br>";

// $i = 0;

// do{
//     echo $i . "<br>";
//     $i++;

// } while ($i < 10);

// echo "<br>";

// for($i = 1; $i < 1000; $i++){
//     if($i % 3 === 0 && $i % 5 === 0){
//         echo $i . "- FIZZ BUZZ <br/>";
//     }elseif($i % 3 === 0){
//         echo $i . "- Fizz <br/>";
//     }elseif($i % 5 === 0){
//         echo $i . "- Buzz <br/>";
//     }else{
//         echo $i . "<br/>";
//     }
// };


$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente):
    echo $cliente ."<br/>";
endforeach;

$cliente = [
    'nombre' => 'Miguel',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor){
    echo $key . "-" . $valor ."<br/>";
}

include 'includes/footer.php';