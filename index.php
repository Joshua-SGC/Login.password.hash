<?php require 'controlador.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Hash</title>
</head>
<body>

    <form action="" method="post" autocomplete="off">
        <h1>Registro de Usuarios</h1>

        <label for="">Usuario</label>
        <input type="text" name="usuario_usu" id="">

        <label for="">Password</label>
        <input type="password" name="password_usu" id="">

        <button type="submit" name="registro">Registro</button>

    </form>


    <form action="" method="post" autocomplete="off" id="segundo">
        <h1>Registro de Usuarios</h1>

        <label for="">Usuario</label>
        <input type="text" name="usuario_usu" id="">

        <label for="">Password</label>
        <input type="password" name="password_usu" id="">

        <button type="submit" name="registro" id="segundoboton">Registro</button>

    </form>


    <form action="" method="post" autocomplete="off" id="tercero">
        <h1>Registro de Usuarios</h1>

        <label for="">Usuario</label>
        <input type="text" name="usuario_usu" id=""  placeholder="Ingrese Nombre">

        <label for="">Password</label>
        <input type="password" name="password_usu" id=""  placeholder="Contraseña">

        <button type="submit" name="registro">Registro</button>

    </form>



</body>
</html>