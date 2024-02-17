<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link rel="stylesheet" href="estiloenphp.css">
</head>
<body>
<?php

$edad = isset($_POST['edad']) ? $_POST['edad'] : 0;

if ($edad >= 18) {
    echo "<h1> Hola, aqui estan tus datos de tu inicio de sesion:</h1>" . '<br>';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    
    echo "Este es tu nombre de usuario: $nombre." . '<br>';
    echo "Tu email es: $email." . '<br>';
}

else {
echo 'Lo siento, pero no cumples con los requisitos para entrar';
}

?>
</body>
</html>
