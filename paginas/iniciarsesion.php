<?php

session_start();
 if(isset($_SESSION['usuario'])){
  header("location:./catalogo.php");
 }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PortPollo</title>
    <link rel="stylesheet" href="../css/iniciar.css"/> 
    <!-- favicon -->
    <link rel="icon" href="../imagenes/favicon-port-pollo.ico">
    <!-- linkeo a font awesome para traer imagenes de iconos-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
  </head>
  <body>
      

<!--formulario -->
<div class="formulario">
    <h1>Inicio de sesion</h1>
    <form action="../php/login.php" id="form" method="POST">
        <div class="username">  
          <input name="correo" type="text" required>
          <label>Nombre de Usuario</label>
        </div>
        <div class="username">
            <input name="contrasena" type="password" required>
            <label>contraseña</label>
        </div>
        <button> Iniciar Sesion </button>
        <div margin="20px" class="recordar">¿olvido su contraseña?</div>
        <div class="registrarse" >
            Quiero hacer el <a href="./registro.php">registro</a>
        </div>        
    </form>
</div>

 

  </body>
