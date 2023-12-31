<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PortPollo</title>
    <link rel="stylesheet" href="css/estilos.css" />
    <!-- favicon -->
    <link rel="icon" href="imagenes/favicon-port-pollo.ico">
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
        <img src="imagenes/logo-port-pollo.png" alt="imagen" class="logo" />
      </a>
      <h2 class="tituloheader" align="center"> PortPollo 🐔</h2>
      <ul>
        <li><a href="index.php">inicio</a></li>
        <li><a href="paginas/catalogo.php">Catalogo</a></li>
        <li><a href="paginas/ubicacion.php">Ubicacion</a></li>
        <li><a href="paginas/pagapp.php">App Movil</a></li>
        <li><a href="paginas/contacto.php">Quejas</a>|</li>
        <li><a href="paginas/contacto.php">Inicio Sesion</a></li>
      </ul>
    </nav>

    <section id="hero">
      <h1>PortPollo<br /></h1>
      <p>DISTRIBUIDORES</p>
      <form action="paginas/catalogo.php">
        <button>
          Productos Disponibles!<br />
          Ir Ahora!
        </button>
      </form>
      <form action="paginas/iniciarsesion.php">
        <button>
         Iniciar Sesion
        </button>
      </form>
    </section>

    
    <section class="quienes-somos">
      <div class="container">
        <div class="contenido">
          <div class="texto">
            <h2>¿Quiénes Somos?</h2>
            <p>
              Somos una empresa distribuidora de pollo comprometida en
              proporcionar productos de alta calidad a nuestros clientes.
              Nuestra misión es ofrecer alimentos frescos y
              conservados a precios increibles. Somos un grupo familiar que Trabaja en estrecha
              colaboración para garantizar la frescura y
              calidad de nuestros productos. Nuestra pasión por el pollo se
              refleja en cada producto que entregamos.
            </p>
          </div>
          <div class="imagen">
            <img src="imagenes/gallina1.webp" alt="Imagen de Pollo" />
          </div>
        </div>
      </div>
    </section>
    

  <!-- creacion de slider basico-->

    <section class="slider-basico">
      <h2 style="text-align: center;">¿Que vendemos?</h2>
      <br><br>
      <div class="slider-frame">
        <ul>
          <li><img src="imagenes/pollo.avif" alt=""></li>
          <li><img src="imagenes/pollo2.jpg" alt=""></li>
          <li><img src="imagenes/pcrudo.jpg" alt=""></li>
          <li><img src="imagenes/pcrudo2.jpg" alt=""></li>
        </ul>
      </div>
    </section>

    

    <!-- inicio de estructira secccion de cartas con informacion -->
    <br><br><br><br>
    <h2 style="text-align: center;">MAS INFO:</h2>
    <br><br><br><br>

    <section class="cards1">
      
      <div class="container">
        
        <div class="cards-container1">
          <figure>
            <img src="imagenes/trans.jpg">
          </figure>
          <div class="contenido-cartas">
            <h2>Transporte</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
              perferendis rerum nemo eveniet repudiandae! Repudiandae libero vel
              nobis quia recusandae corporis quod cupiditate aliquid esse eum
              fugit odit, explicabo a.
            </p>
            <a href="paginas/ubicacion.php">mas info</a>
          </div>
        </div>
        <div class="cards-container1">
          <figure>
            <img src="imagenes/entrega.jpg">
          </figure>
          <div class="contenido-cartas">
            <h2>Zonas de entrega</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
              perferendis rerum nemo eveniet repudiandae! Repudiandae libero vel
              nobis quia recusandae corporis quod cupiditate aliquid esse eum
              fugit odit, explicabo a.
            </p>
            <a href="paginas/ubicacion.php">mas info</a>
          </div>
        </div>
        <div class="cards-container1">
          <figure>
            <img src="imagenes/horario.avif">
          </figure>
          <div class="contenido-cartas">
            <h2>Horarios</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
              perferendis rerum nemo eveniet repudiandae! Repudiandae libero vel
              nobis quia recusandae corporis quod cupiditate aliquid esse eum
              fugit odit, explicabo a.
            </p>
            <a href="paginas/ubicacion.php">mas info</a>
          </div>
        </div>
    </section>

    <!-- section 3 -->

    <section class="quienes-somos">
      <div class="container">
        <div class="contenido">
          <div class="texto">
            <h2>Distribucion</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, impedit autem qui soluta accusamus totam saepe cum id eos? Nulla ducimus harum voluptates ex mollitia fuga assumenda maiores ipsum cumque?
            </p>
          </div>
          <div class="imagen">
            <img src="imagenes/distri.png" alt="Imagen de Pollo" />
          </div>
        </div>
      </div>
    </section>


    <!--inicio de seccion slider-->
    <section class="cards2">
      
      <div class="container">
        
        <div class="cards-container1">
          <h3> informacion</h3>
          <figure>
            <img src="https://media.istockphoto.com/id/1203186042/es/vector/icono-de-informaci%C3%B3n-s%C3%ADmbolo-de-informaci%C3%B3n-ilustraci%C3%B3n-vectorial.jpg?s=612x612&w=0&k=20&c=0hFaVcswdv6Uxaf-IvsgZ0OHgBcefqV4S7NoN_Szb7M=">
          </figure>
          
        </div>
        <div class="cards-container1">
          <h3> ayuda</h3>
          <figure>
            <img src="https://img.freepik.com/vector-premium/simbolo-manos-ayuda-signo-padre-e-hijo-icono-ayuda-cuidado-ninos-vector-familiar-apoyo_87543-10271.jpg">
          </figure>
          
        </div>
        <div class="cards-container1">
          <h3>No llego</h3>
          <figure>
            <img src="https://img.freepik.com/vector-premium/icono-calendario-reloj-simbolo-fecha-hora-icono-evento-signo-vector-plano-aislado-blanco_635979-718.jpg">
          </figure>
          
        </div>
    </section>

    

    <footer class="pie-pagina">
      
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#">
              <img src="imagenes/logo-port-pollo.png" alt="logo de agroploplo" />
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
