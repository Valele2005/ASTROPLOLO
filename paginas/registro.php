<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PortPollo</title>
    <link rel="stylesheet" href="../css/registro.css"/>
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
    <h1>Registro</h1>
    <form action="../php/registro.php" method="POST">
        <div class="username">
          <input name="nombre" type="text" required>  
          <label>Nombres</label>
        </div>
        <div   class="username">
            <input name="apellidos" type="text" required>
            <label>Apellidos</label>
          </div>
          <div class="username">
            <input name="correo" type="text" required>
            <label>Correo</label>
          </div>  
        <div class="username">
            <input name="contrasena" type="password" required>
            <label>Contraseña</label>
        </div>
        <div name="telefono "class="username">
            <input name="telefono" type="tel" required>
            <label>Numero de contacto</label>
        </div>
       <button name="boton">Registrarse</button>
           
    </form>
</div>
 
  </body>