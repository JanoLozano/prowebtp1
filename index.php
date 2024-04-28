<?php
require_once("aldeano.php");
require_once("arbusto.php");
require_once("pesquero.php");
require_once("bancodepesca.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>El Aldeano Y El Pesquero</h1>
        
        <div class="recolectar">
            <?php
            // Instanciacion Aldeano - Arbusto
            $aldeano = new Aldeano();
            $arbusto = new Arbusto();

            // Ejecucion
            $aldeano->recolectar($arbusto);
            ?>
        </div>

        <div class="recolectar">
            <?php
            // Instanciacion  Pesquero--BancoDePesca
            $pesquero = new Pesquero();
            $bancoDePesca = new BancoDePesca();

            // Ejecucion
            $pesquero->recolectar($bancoDePesca);
            ?>
        </div>
    </div>
</body>
</html>
