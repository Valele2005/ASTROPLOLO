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
      <h2 class="tituloheader" align="center"> Inicio Secion</h2>
      <ul>
        <li><a href="../index.html">inicio</a></li>
        <li><a href="../paginas/catalogo.php">Catalogo</a></li>
        <li><a href="../paginas/ubicacion.php">Ubicacion</a></li>
        <li><a href="../paginas/pagapp.php">App Movil</a></li>
        <li><a href="../paginas/contacto.php">Quejas</a>|</li>
        <li><a href="../paginas/contacto.php">Inicio Sesion</a></li>
      </ul>
    </nav>
    <section id="hero2">
      <div>
        <h1>¡CONTACTANOS!</h1>
        <div class="box2">
          <div class="social-icons2">
            <a href="https://wa.me/qr/TFDKDT3XYVFGJ1" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-youtube"></a>
          </div>
          <form action="../paginas/catalogo.html">
          </form>
        </div>
      </div>
    </section>

    <section id="contact" class="contact-section">
      <h2 class="t2">QUEJAS Y RECLAMOS</h2>
      <div class>
        <br>
        <hr>
        <br>
        <h2 class="contact-heading">Contacto</h2>
        <p class="contact-description">
          Envíanos un mensaje y te responderemos lo antes posible.
        </p>
        <form action="" method="POST" class="contact-form">
          <div class="form-group">
            <label for="nombre" class="form-label">Nombre:</label>
            <input
              type="text"
              id="nombre"
              name="nombre"
              required
              class="form-input"
            />
          </div>

          <div class="form-group">
            <label for="correo" class="form-label">Correo Electrónico:</label>
            <input
              type="email"
              id="correo"
              name="correo"
              required
              class="form-input"
            />
          </div>

          <div class="form-group">
            <label for="mensaje" class="form-label">Mensaje:</label>
            <textarea
              id="mensaje"
              name="mensaje"
              rows="4"
              required
              class="form-input"
            ></textarea>
          </div>

          <button type="submit" class="form-button">Enviar</button>
        </form>
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
