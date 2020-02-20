<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
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
<body class="bg-dark">
    <div class="container">
        <div class="row text-center pt-4">
            <div class="col-3 "></div>
            <div class="col-6 bg-light border border-danger rounded pb-3">
                <h3 class="pt-2">Calculadora</h3>
                <div>
                    <form action="" method="POST" class="">
                        <!--Valor1-->
                        <div>
                            <label class="form-control-sm" for="valor1">Valor 1</label>
                        </div>
                        <div>
                            <input class="form-control-sm" type="text" name="valor1" id="valor1">
                        </div>
                        <!--Valor 2-->
                        <div>
                            <label class="form-control-sm" for="valor2">Valor 2</label>
                        </div>
                        <div>
                            <input class="form-control-sm" type="text" name="valor2" id="valor2">
                        </div>
                        <!--Botão-->
                        <div class="p-4 ">
                            <button class="btn btn-outline-primary" name="btnSomar">Somar</button>
                            <button class="btn btn-outline-danger"  name="btnSubtrair">Subtrair</button>
                            <button class="btn btn-outline-success" name="btnMultiplicar">Multiplicar</button>
                            <button class="btn btn-outline-warning" name="btnDividir">Dividir</button>
                        </div>
                        <div>
                        </div>
                    </form>
                    <h4>Resultado</h4>
                    <h1>
                        <?php
                            echo $resultado;
                        ?>
                    </h1>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>
