<?php

if(isset($_POST['Lados']) && isset($_POST['apotema'])){

    $L = $_POST['Lados'];
    $ap = $_POST['apotema'];
    $a = null;
    $perimetro = 8 * $L;
    $area =  ($perimetro  * $ap )/2;
    echo "El valor del area del octagono es: " . $area . "cm al cuadrado";
}

?>