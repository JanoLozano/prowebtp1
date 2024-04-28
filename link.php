<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Page</title>
    <link rel="stylesheet" href="estilo.css">
    <script> /*esta parte del codigo la busque en google para poder agregarle un cargador con javascrip y los sonidos*/
        window.addEventListener('load', () => {
            const loader = document.querySelector('.loader');
            loader.classList.add('hidden');
        });
        
    </script>
</head>
<body class="body-link">
    <div class="cargador hidden"></div>
    <div class="container">
        <h1>Bienvenido al jueguito del aldeano y el pesquero</h1>
        <p class="link-p">
            <a href="index.php" class="link-button">¡A JUGAR!</a>
        </p>
    </div>
</body>
</html>
