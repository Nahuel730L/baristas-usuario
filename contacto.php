<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link a bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Contacto</title>

		<!-- link a style.css -->
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <!--Logo de sitio web-->
    <link rel="icon" type="image.jpg" href="./img/logo.png" />
    <link rel="stylesheet" href="./css/fyc.css">
    <link rel="stylesheet" href="./css/style.css">
  <!-- SEO --> 

    <meta name="keywords" content=" br - branca, br, branca, Glew, longchamps, empleos, bar, Bar de cervezas artesanales, Bar de vinos, Bar temático, Bar de happy hour" />
    <meta name="description" content="Branca: Un bar emblemático que combina elegancia clásica y modernidad. Disfruta de cócteles artesanales, vinos selectos y una atmósfera acogedora" />
    <meta name="author" content="Nahuel Espinillo" />
    <meta name="language" content="spanish" />
    <meta name="geo.placename" content="Argentina" />
    <meta property="BR - BRANCA" content="Bienvenido a BRANCA" />
    <meta property="og:image" content="./img/icono.jpg" />

    <!-- FIN DE SEO -->

</head>
<body>  <!-- Manteniendo el "header" sobre "body"  -->

<header>
      <div class="container-hero">
        <div class="container hero">
          <div class="customer-support">
            <i class="fa-solid fa-headset"></i>
            <div class="content-customer-support">
              <span class="text">Soporte al cliente</span>
              <span class="number">123-456-7890</span>
            </div>
          </div>

          <div class="container-logo">
            <i class="fa-solid fa-mug-hot"></i>
            <h1 class="logo"><a href="../index.php">Baristas</a></h1>
          </div>

          <div class="container-user">
            <a href="./newletter.php">
            <i class="fa-solid fa-user"></i></a>
            <a href="#">
            <i class="fa-solid fa-basket-shopping"></i></a>
            <div class="content-shopping-cart">
              <span class="text">Carrito</span>
              <span class="number">(0)</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container-navbar">
        <nav class="navbar container">
          <i class="fa-solid fa-bars"></i>
          <ul class="menu">
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./pages/mocca-helado.html">Moca Helado</a></li>
            <li><a href="./pages/expreso.html">Expreso</a></li>
            <li><a href="./pages/capuchino.html">Capuchino</a></li>
            <li><a href="./pages/tienda.html">Blog</a></li>
          </ul>

          <form class="search-form">
            <input type="search" placeholder="Buscar..." />
            <button class="btn-search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </nav>
      </div>
    </header>
        
<main class="main-sumate">
   <div class="background-image">
        <div class="image-texto">
            <h1>Sumate a nuestra tienda!</h1>
            <p>¿Estás interesado en nuevas oportunidades de franquicias?
                Envianos tus datos y completá el formulario.</p>
                 <button id="scrollToForm">Ir al formulario</button>
        </div>
   </div>
    <div class="sombreado" align="center">
    <div id="container-sumate"></div>
<!--  formulario  -->
<form method="post" class="form-container" id="miFormulario">

    <h2>CONTACTANOS</h2>
    <div class="form-group">
        <p>Complete el siguiente formulario para contactarse con nosotros:</p>
        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
            <label for="Apellido">Apellido:</label>
            <input type="text" name="Apellido" id="Apellido" placeholder="Ingrese su Apellido">
        </div>
        <div class="form-group">
            <label for="Telefono">Telefono:</label>
            <input type="number" name="Telefono" id="Telefono" placeholder="Ingrese su Telefono">
        </div>
        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="text" name="Email" id="Email" placeholder="Ingrese su Email">
        </div>
        <div class="form-group">
            <label for="Comentarios">Comentarios:</label>
            <textarea name="Comentarios" name="Comentarios" id="Comentarios" placeholder="¿Qué más quiere agregar?"></textarea>
        </div>
        <div class="terminos-condiciones">
            <input type="checkbox" id="terminos" required></input>
            <label for="terminos">Estoy de acuerdo con los <a href="..\pages\terminos-y-condiciones.html">Términos y condiciones</a></label>
        </div>
        <input class="btn-success" type="submit" name="register" ></input>
    </div>
</form>
        <?php 
        include("contactoo.php");
        ?>
    <!-- Fin formulario  -->
</main>
    <script src="./js/script.js"></script>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</body>
</html>