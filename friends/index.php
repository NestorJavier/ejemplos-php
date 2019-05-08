<?php

try{
$db = new PDO('sqlite:/home/nestor/ejemplos-php-NestorJavier/friends/ejemplo.sqlite');
}
catch(PDOException $e){
echo 'No se pudo conectar a la BD: '. $e->getMessage();

}

//Consultar la Base de datos

$resultado = $db->query("SELECT * FROM friends");

if($resultadp === false)
{
    echo "Error al consultar la base de datos";
}

//Mostrar el resultado de la consulta

// while($ren = $resultado->fetch())
// {
//     echo $ren['Id'] .' - ' $ren['name'] . '<br>';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>my Friends</h1>
    <table>
    <thead>
    <tr>
    <th>ID</th>
    <th>name</th>
    <th>Birth</th>
    <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php while($ren = $resultado->fetch()): ?>
    <tr>
    <td>
        <?php         echo $ren['Id'];   ?>
    </td>
    <td>
<?php          echo $ren['name'];    ?>
</td>
<td>
<?php       echo $ren['birthday'];  ?>
</td>
<td>
<?php        echo $ren['email'];     ?>
    </td>
    
    </tr>

    <?php endwhile ?>
    </tbody>
    </table>
</body>
</html>