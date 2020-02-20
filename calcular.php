<?php
if ($_POST) {
    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    // $resultado;
    if(isset($_POST['btnSomar'])){
        $resultado = $num1 + $num2;
    } else if(isset($_POST['btnSubtrair'])){
        $resultado = $num1 - $num2;
    }else if(isset($_POST['btnMultiplicar'])){
        $resultado = $num1 * $num2;
    }else if(isset($_POST['btnDividir'])){
        $resultado = $num1 - $num2;
    }
}
?>