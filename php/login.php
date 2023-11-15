<?php
session_start();

include 'conexion.php';


$correo =$_POST['correo'];
$contrasena=$_POST['contrasena'];


$validar_login= mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo ='$correo' and contraseña='$contrasena'");


if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']= $correo;
    header("location:../paginas/catalogo.php");
    exit;
}else{
    echo '
    <script>

    alert("Usuario no existe, Verificar los datos introducidos");
    window.location = "../paginas/registro.php";
    </script>
    ';
    exit;
}

?>