<?php
    $nombre = $_POST["nombre"];
    $rut=$_POST["rut"];
    $correo= $_POST["correo"];
    $telefono= $_POST["telefono"];

    $contenido = "
    Nombre: $nombre
    rut: $rut
    correo: $correo
    telefono: $telefono
    ";

    $archivo =fopen("datos docentes/$nombre.txt", "w");
    fwrite($archivo, $contenido);


echo "<script> alert(´formulado enviado con exito´);</script>";
