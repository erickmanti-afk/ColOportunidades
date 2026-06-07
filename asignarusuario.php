<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de peticiones</title>
    <link rel="stylesheet" href="contacto.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>
<body>

    <form action="asignacion.php" method="post">
        <div class="form">
            <h1>Asignacion de usuario nuevo</h1>
            <div class="grupo">
                <input type="text" name="usuario" id="" required><span class="barra"></span>
                <label>Correo</label>
            </div>
            <div class="grupo">
                <input type="text" name="contraseña" id="" required><span class="barra"></span>
                <label>Contraseña</label>
            </div>
            <div class="grupo">
                <input type="text" name="idRol" id="" required><span class="barra"></span>
                <label>Id del rol</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>