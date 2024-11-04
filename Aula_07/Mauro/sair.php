<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
        <h1>
            Pagina final
        </h1>

    <p>
        <a href="formulario.php">formulario</a>
    </p>
<?php
        session_start();
        session_unset();
        session_destroy();

        header('location: formulario.php');
        exit();
?>





