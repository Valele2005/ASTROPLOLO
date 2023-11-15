<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellidos'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$telefono=$_POST['telefono'];

$query="INSERT INTO usuarios(nombre,apellidos,correo,contraseña,telefono)
        VALUES ('$nombre','$apellido','$correo','$contrasena','$telefono')";   


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
            alert("Usuario registrado exitosamente");
            window.location = "../paginas/iniciarsesion.php";
    </script>
    
    ';
}

mysqli_close($conexion);
?>