<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="peticiones.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
     <style>
        a{
    background: #FC5C7D;
    background: -webkit-linear-gradient(to right, #6A82FB, #FC5C7D);
    background: #3186F5;
    text-align: center;
    display: block;
    width: 100px;
    height: 30px;
    border:none;
    text-decoration: none;
    color:#fff; 
    border-radius: 4px;
    font-size: 16px;
    margin: 10px auto;
    cursor: pointer;
}
        }
    </style>
</head>
        <br><br>
<body>


    <form action="registro.php" method="post" enctype="multipart/form-data">
            <br>
            <br>
            <br>
        <div class="form">
            <br>
            <br>
            <br>
            <h1>Registrarse</h1>
            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="apellido" id="" required><span class="barra"></span>
                <label>Apellido</label>
            </div>
            <div class="grupo">
                <input type="email" name="correo" id="" required><span class="barra"></span>
                <label>Correo</label>
            </div>
            <div class="grupo">
                <input type="number" name="telefono" id="" required><span class="barra"></span>
                <label>Telefono</label>
            </div>
            <div class="grupo">
                <input type="text" name="barrio" id="" required><span class="barra"></span>
                <label>Barrio</label>
            </div>
            <div class="grupo">
                <label>Hoja de vida o perfil profesional</label>
                <br>
                <br>
                <input type="file" name="archivo" id="" required><span class="barra"></span>
            </div>
            <button type="submit" name="subir">Enviar</button>
            <a class="boton" href="index.html">Regresar</a>
        </div>
    </form>
</body>
</html>