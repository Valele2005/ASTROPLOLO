<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AGROPLUS</title>
    <link rel="stylesheet" href="../css/estilos.css" />
    <!-- linkeo a font awesome para traer imagenes de iconos-->
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
      <h2 class="tituloheader" align="center">Ubicacion📍</h2>
      <ul>
        <li><a href="../index.php">inicio</a></li>
        <li><a href="../paginas/catalogo.php">Catalogo</a></li>
        <li><a href="../paginas/ubicacion.php">Ubicacion</a></li>
        <li><a href="../paginas/pagapp.php">App Movil</a></li>
        <li><a href="../paginas/contacto.php">Quejas</a>|</li>
        <li><a href="../paginas/contacto.php">Contacto</a></li>
      </ul>
    </nav>

    <div class="row">
      <aside>
        <h2 class="titulo-ubi">Nuestra ubicacion!</h2>
        <br>
        <img src="../imagenes/pierna.jpg" style="width: 100%;" alt="">
        <br><br>
        
        <p style="color: #000000;">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum
          soluta natus possimus suscipit eum atque nemo harum dolore sapiente,
          perspiciatis, quos quam. Architecto voluptatum iste deleniti adipisci
          reprehenderit sit delectus!
        </p>
        
        <br><br>
        
        <h3> OTRAS UBICACIONES:</h3>
        <br>
        <p style="color: #000000;">Aqui tienes todo lo que necesitas saber sobre nosotros</p>
        <br>
        
        <a href="#" class="video-link">
          <h4>Mapa</h4>
          <img src="../imagenes/mapa.jpg" alt="imagen">
        </a>
        <a href="#" class="video-link">
          <h4>Ubicacion</h4>
          <img src="../imagenes/mapa.jpg" alt="imagen">
        </a>
        <a href="#" class="video-link">
          <h4>Como llegar</h4>
          <img src="../imagenes/mapa.jpg" alt="imagen">
        </a>

      </aside>
      <section class="mapMain">
        <div id="map">
          <script src="../js/script.js"></script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
        </div> 
        <br><br>
        
      </section>
    </div>

    <footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#">
              <img
                src="../imagenes/logo-port-pollo.png"
                alt="logo de agroploplo"
              />
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
