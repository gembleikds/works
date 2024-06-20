<!DOCTYPE php>
<html lang="en">

<head>
    <title>Registrar alumno</title>
</head>
<link rel="stylesheet" type="text/css" href="index.css">

<body>
    <h1>Registrar alumno</h1>
    <form action="card.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required><br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required><br><br>

        <input type="submit" name="registrar" value="Registrar">
    </form>
    <footer>UVEG/Programación web</footer>
</body>

</html>
