<?php
declare(strict_types=1);
 include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : void {
    if($autenticado){
        echo "El Usuario esta Autenticado";
    } else {
        echo "El Usuario no existe, Inicie sesión";
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';