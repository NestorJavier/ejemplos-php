<?php


if(isset($_GET['numero']))
{
    echo '<table border="2">';
    for($i = 1; $i < 10; $i++)
    {
        echo '<tr>';
        echo '<td>';
        echo $_GET['numero'] . ' x ' . $i . ' = ';
        echo '</td>';
        echo '<td>';
        echo $_GET['numero'] * $i . '<br>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablas</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <form action="tablas.php">
        <label for="numero">¿De que numero?</label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Obtener">
    </form>
</body>
</html>