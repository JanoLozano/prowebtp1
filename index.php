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
    <title>TP-1-PRODUCCION-WEB</title>
    <link rel="stylesheet" href="estilo.css">
    <script>/*esta parte del codigo la busque en google para poder agregarle un cargador con javascrip y los sonidos*/
        window.addEventListener('load', () => {
            const loader = document.querySelector('.loader');
            loader.classList.add('hidden');
        });
        window.addEventListener('load', () => {
            const loaderSound = new Audio('sonidos/cargaindex.mp3');
            loaderSound.play();
        });
    </script>
</head>
<body class="body-index">
    <div class="loader"></div>
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
    <p class="link-p-index">
        <a href="link.php" class="link-button">Volver a la pagina principal</a>
    </p>
</body>
</html>