<?php


if(isset($_GET['nombre']))
{
    echo 'hola '. $_GET['nombre']. ' desde saludar.php';
}
/*
Comando php para iniciar el servidor
php -S localhost:8000
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saludar</title>
</head>
<body>
    <form action="Saludar.php">
        <label for="nombre"> Escribe tu nombre</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Saludar">
    </form>
</body>
</html>