<?php
session_start();
if(!isset($_SESSION['usuario'])){
  echo '
  <script> 
  alert("Por favor debes iniciar sesion");
  window.location="./iniciarsesion.php";
  </script>
  ';
  die();
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AGROPLUS</title>
    <link rel="stylesheet" href="../css/estilos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars" style="color: #000000"></i>
      </label>
      <a href="#" class="enlace">
        <img src="../imagenes/logo-port-pollo.png" alt="imagen" class="logo" />
      </a>
      <h2 class="tituloheader" align="center"> Catalogo📋</h2>
      <ul>
        <li><a href="../index.html">inicio</a></li>
        <li><a href="../paginas/catalogo.php">Catalogo</a></li>
        <li><a href="../paginas/ubicacion.php">Ubicacion</a></li>
        <li><a href="../paginas/pagapp.php">App Movil</a></li>
        <li><a href="../paginas/contacto.php">Quejas</a>|</li>
        <li><a href="../paginas/contacto.php">Contacto</a></li>
        <li><a href="../php/cerrarsesion.php">Cerrar Sesion</a></li>
      </ul>
    </nav>
    <!-- repeticion de header -->

    <div class="titulo-catalogo">
      <h2>PRODUCTOS DISPONIBLES:</h2>
    </div>
    <section id="galeria">
      <img src="../imagenes/pechuga.webp" alt="" />
      <img src="../imagenes/ala.avif" alt="" />
      <img src="../imagenes/pierna.jpg" alt="" />
      <img src="../imagenes/pollo.jpg" alt="" />
      <img src="../imagenes/pollo.webp" alt="" />
    </section>
    <br /><br />
    <br /><br />
    <section class="productos">
      <!-- Producto 1 -->
      <div class="producto">
        <div class="producto-imagen">
          <img src="../imagenes/pechuga.webp" alt="Producto 1" class="img"/>
        </div>
        <div class="producto-info">
          <h2>Pechuga</h2>
          <p>
            Valor por kilo :
          </p>
          <p class="precio">$13.000</p>
        </div>
      </div>

      <!-- Producto 2 -->
      <div class="producto">
        <div class="producto-imagen">
          <img src="../imagenes/ala.avif" alt="Producto 2" />
        </div>
        <div class="producto-info">
          <h2>Alas </h2>
          <p>
            Valor por kilo :
          <p class="precio">$9.000</p>
        </div>
      </div>

      <!-- Producto 3 -->
      <div class="producto">
        <div class="producto-imagen">
          <img src="../imagenes/pierna.jpg" alt="Producto 3" />
        </div>
        <div class="producto-info">
          <h2>Colombina</h2>
          <p>
           valor por kilo:
          </p>
          <p class="precio">$12.000</p>
        </div>
      </div>

      <!-- Producto 4 -->
      <div class="producto">
        <div class="producto-imagen">
          <img src="../imagenes/pollo.jpg" alt="Producto 4" />
        </div>
        <div class="producto-info">
          <h2>Pollo Entero</h2>
          <p>
            Valor por kilo:
          </p>
          <p class="precio">$10.800<</p>
        </div>
      </div>

      <!-- Producto 5 -->
      <div class="producto">
        <div class="producto-imagen">
          <img src="../imagenes/menude.jpg" alt="Producto 5" />
        </div>
        <div class="producto-info">
          <h2>Menudencias</h2>
          <p>
            Valor por unidad de paquete :
          </p>
          <p class="precio">$700<</p>
        </div>
      </div>

      <div class="producto">
        <div class="producto-imagen">
          <img src="../imagenes/muslo.jpg" alt="Producto 6" />
        </div>
        <div class="producto-info">
          <h2>Pierna Pernil</h2>
          <p>
           Valor por kilo:
          </p>
          <p class="precio">$10.800</p>
        </div>
      </div>
        <div class="producto">
          <div class="producto-imagen">
            <img src="../imagenes/Corazones.webp" alt="Producto 6" />
          </div>
          <div class="producto-info">
            <h2>Corazones</h2>
            <p>
             Valor por kilo:
            </p>
            <p class="precio">$9.800</p>
        </div>
        </div>
          <div class="producto">
            <div class="producto-imagen">
              <img src="../imagenes/mollejas.webp" alt="Producto 6" />
            </div>
            <div class="producto-info">
              <h2>Mollejas</h2>
              <p>
               Valor por kilo:
              </p>
              <p class="precio">$12.000</p>
          </div>
        </div>
    </section>

    <footer class="pie-pagina">
      
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#">
              <img src="../imagenes/logo-port-pollo.png" alt="logo de agroploplo" />
            </a>
          </figure>
        </div>
        <div class="box">
          <h2>SOBRE NOSOTROS</h2>
          <p>
            Empresa dedicada a la distribuicion y venta de pollo, por todo
            bogota
          </p>
          
        </div>
        <div class="box">
          <h2>CONTACTO:</h2>
          <div class="red-social">
            <a href="#" class="fa-brands fa-whatsapp"></a>
            <a href="#" class="fa-brands fa-facebook"></a>
            <a href="#" class="fa-brands fa-x"></a>
            <a href="#" class="fa-brands fa-linkedin"></a>
          </div>
        </div>
      </div>
      <div class="grupo-2">
        <small>&copy; 2023 <b>PortPollo</b> - Contactanos YA!</small>
      </div>
    
    </footer>
  </body>
</html>
