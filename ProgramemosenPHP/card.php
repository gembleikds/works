<!DOCTYPE php>
<html lang="en">

<head>
    <title>Datos del alumno</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>

<body>
    <div class="container">
        <img src="registrado.png" alt="Registrado" class="image">
        <div class="data">
            <h1>Datos del alumno</h1>
            <?php
            if (isset($_POST['registrar'])) {
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $edad = $_POST['edad'];
                $correo = $_POST['correo'];
                //No mostramos la contraseña por seguridad
            ?>
                <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
                <p><strong>Apellidos:</strong> <?php echo $apellidos; ?></p>
                <p><strong>Edad:</strong> <?php echo $edad; ?></p>
                <p><strong>Correo:</strong> <?php echo $correo; ?></p>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>
