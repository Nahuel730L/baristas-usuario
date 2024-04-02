<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Trabaja con nosotros</title>

  <!-- SEO --> 

    <meta name="keywords" content=" br - branca, br, branca, Glew, longchamps, empleos, bar, Bar de cervezas artesanales, Bar de vinos, Bar temático, Bar de happy hour" />
    <meta name="description" content="Branca: Un bar emblemático que combina elegancia clásica y modernidad. Disfruta de cócteles artesanales, vinos selectos y una atmósfera acogedora" />
    <meta name="author" content="Nahuel Espinillo" />
    <meta name="language" content="spanish" />
    <meta name="geo.placename" content="Argentina" />
    <meta property="BR - BRANCA" content="Bienvenido a BRANCA" />
    <meta property="og:image" content="..\img\icono.jpg" />

    <!-- FIN DE SEO -->

		<!-- link a style.css -->
    <link rel="stylesheet" href="..\barista+usuario\css\style.css">
    <link rel="stylesheet" href="..\barista+usuario\css\fyc.css">

        <!--Logo de sitio web-->
    <link rel="icon" type="image.jpg" href=".\img\logo.png" />


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
            <h1 class="logo"><a href="..\index.php">Baristas</a></h1>
          </div>

          <div class="container-user">
            <a href=".\newletter.php">
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
            <li><a href=".\index.php">Inicio</a></li>
            <li><a href="..\barista+usuario\pages\mocca-helado.html">Moca Helado</a></li>
            <li><a href="..\barista+usuario\pages\expreso.html">Expreso</a></li>
            <li><a href="..\barista+usuario\pages\capuchino.html">Capuchino</a></li>
            <li><a href="..\barista+usuario\pages\tienda.html">Blog</a></li>
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
            <h1>Trabaja con nosotros!</h1>
            <p>Si queres sumarte a nuestro equipo, envianos tus datos y completá el siguiente formulario </p>
                 <button id="scrollToForm">Ir al formulario</button>
        </div>
   </div>
    <div class="sombreado" align="center">
   	<div id="container-sumate"></div>
<!--  formulario  -->
<form method="post" class="form-container" id="miFormulario" >
   <h2 >TRABAJA CON NOSOTROS</h2>
    <div class="form-group" >
        <p>Si quieres formar parte del equipo, completa el siguiente formulario:</p>
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
            <label for="Email">email:</label>
            <input type="text" name="email" id="email" placeholder="Ingrese su email">
        </div>

        <div class="form-group">
            <label for="Edad">Edad:</label>
            <input type="number" name="Edad" id="Edad" placeholder="Ingrese su Edad">
        </div>
        <div class="form-group">
            <label for="DNI">DNI:</label>
            <input type="number" name="DNI" id="DNI" placeholder="Ingrese su dni">
        </div>
        <div class="form-group">
            <label for="Domicilio">Domicilio:</label>
            <input type="text" name="Domicilio" id="Domicilio" placeholder="Ingrese su domicilio">
        </div>
        <div class="form-group">
            <label for="Localidad">Localidad:</label>
            <input type="text" name="Localidad" id="Localidad" placeholder="Ingrese su localidad">
        </div>
        <div class="form-group">
            <label for="Pais">Pais:</label>
            <input type="text" name="Pais" id="Pais" placeholder="Ingrese su pais">
        </div>       
        
        <div class="terminos-condiciones">
            <input type="checkbox" id="terminos" required>
            <label for="terminos">Estoy de acuerdo con los <a href="..\pages\terminos-y-condiciones.html">Términos y condiciones</a></label>
        </div>
        <input class="btn-success" type="submit" name="register"></input>
    </div>
</form>
        <?php 
        include("trabaja-con-nosotros.php");
        ?>
    <!-- Fin formulario  -->
</main>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    <script src=".\js\script.js"></script>

</body>
</html>