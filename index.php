<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validar.php" method="post">
        <label for="nombre">nombre: </label>
        <input type="name" id="nombre" name="nombre"><br>
        <label for="rut">RUT: </label>
        <input type="text" id="rut" name="rut"><br>
        <label for="correo">correo: </label>
        <input type="email" id="correo" name="correo"> <br>
        <label for="telefono">telefono: </label>
        <input type="number" id="telefono" name="telefono"><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>