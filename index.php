<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Baristas</title>
    <link rel="stylesheet" href=".\css\style.css" />
    <link rel="stylesheet" href=".\css\fyc.css" />

    <link rel="icon" type="image.png" href="./img/expreso-category.jpg">
    <!-- En el head de tu HTML -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- control de carousel de (mejores productos) -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="icon" type="image.png" href="./img/logo.png">

  </head>
  <body>

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
            <h1 class="logo"><a href=".\index.php">Baristas</a></h1>
          </div>

          <div class="container-user">
            <a href=".\olvidopass\index.php">
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
            <li><a href="..\barista+usuario\index.php">Inicio</a></li>
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



    <section class="banner">
      <div class="content-banner">
        <p>Café Delicioso</p>
        <h2>100% Natural <br />Café Fresco</h2>
        <a href="./pages/tienda.html">Comprar ahora</a>
      </div>
    </section>

    <main class="main-content">
      <section class="container container-features">
        <div class="card-feature">
          <i class="fa-solid fa-plane-up"></i>
          <div class="feature-content">
            <span>Envío gratuito a nivel mundial</span>
            <p>En pedido superior a $150</p>
          </div>
        </div>
        <div class="card-feature">
          <i class="fa-solid fa-wallet"></i>
          <div class="feature-content">
            <span>Contrareembolso</span>
            <p>100% garantía de devolución de dinero</p>
          </div>
        </div>
        <div class="card-feature">
          <i class="fa-solid fa-gift"></i>
          <div class="feature-content">
            <span>Tarjeta regalo especial</span>
            <p>Ofrece bonos especiales con regalo</p>
          </div>
        </div>
        <div class="card-feature">
          <i class="fa-solid fa-headset"></i>
          <div class="feature-content">
            <span>Servicio al cliente 24/7</span>
            <p>LLámenos 24/7 al 123-456-7890</p>
          </div>
        </div>
      </section>

      <section class="container top-categories">
        <h1 class="heading-1">Mejores Categorías</h1>
        <!--<div class="container-categories"> -->

          <div class="card-category category-moca">
            <p>Café moca</p>
            <a class="btn-read-more" href=".\pages\mocca-helado.html">Ver más</a></span>
          </div>
          <div class="card-category category-expreso">
            <p>Expreso Americano</p>
            <a class="btn-read-more" href=".\pages\expreso.html">Ver más</a>
           
          </div>
          <div class="card-category category-capuchino">
            <p>Capuchino</p>
            <a class="btn-read-more" href=".\pages\capuchino.html">Ver más</a></span>
          </div>
        </div>
      </section>
<!------------------------- MERJORES PRODUCTOS --------------------->

      <section class="container top-products">
        <h1 class="heading-1">Mejores Productos</h1>

        <div class="container-options">
          <span class="active">Destacados</span>
          <span class="active"><a href="./pages/tienda.html">Todos los productos</a></span>
        </div>

        <div class="container-products">
          <!-- Producto 1 -->
          <div class="card-product">
            <div class="container-img">
              <img src="img/cafe-irish.jpg" alt="Cafe Irish" />
              <span class="discount">-13%</span>
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <h3>Cafe Irish</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$4.60 <span>$5.30</span></p>
            </div>
          </div>
          <!-- Producto 2 -->
          <div class="card-product">
            <div class="container-img">
              <img
                src="./img/cafe-ingles.jpg"
                alt="Cafe incafe-ingles.jpg"
              />
              <span class="discount">-22%</span>
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <h3>Cafe Inglés</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$5.70 <span>$7.30</span></p>
            </div>
          </div>
          <!--  -->
          <div class="card-product">
            <div class="container-img">
              <img
                src="./img/cafe-australiano.jpg"
                alt="Cafe Australiano"
              />
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h3>Cafe Australiano</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$3.20</p>
            </div>
          </div>
          <!--  -->
          <div class="card-product">
            <div class="container-img">
              <img src="./img/cafe-helado.jpg" alt="Cafe Helado" />
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <h3>Cafe Helado</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$5.60</p>
            </div>
          </div>
        </div>
      </section>


      <section class="gallery">
        <img
          src="./img/gallery1.jpg"
          alt="Gallery Img1"
          class="gallery-img-1"
        /><img
          src="./img/gallery2.jpg"
          alt="Gallery Img2"
          class="gallery-img-2"
        /><img
          src="./img/gallery3.jpg"
          alt="Gallery Img3"
          class="gallery-img-3"
        /><img
          src="./img/gallery4.jpg"
          alt="Gallery Img4"
          class="gallery-img-4"
        /><img
          src="./img/gallery5.jpg"
          alt="Gallery Img5"
          class="gallery-img-5"
        />


      </section>

      <section class="container specials">
        <h1 class="heading-1">Especiales</h1>

        <div class="container-products">
          <!-- Producto 1 -->
          <div class="card-product">
            <div class="container-img">
              <img src="./img/cafe-irish.jpg" alt="Cafe Irish" />
              <span class="discount">-13%</span>
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <h3>Cafe Irish</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$4.60 <span>$5.30</span></p>
            </div>
          </div>
          <!-- Producto 2 -->
          <div class="card-product">
            <div class="container-img">
              <img
                src="./img/cafe-ingles.jpg"
                alt="Cafe incafe-ingles.jpg"
              />
              <span class="discount">-22%</span>
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <h3>Cafe Inglés</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$5.70 <span>$7.30</span></p>
            </div>
          </div>
          <!--  -->
          <div class="card-product">
            <div class="container-img">
              <img src="./img/cafe-viena.jpg" alt="Cafe Viena" />
              <span class="discount">-30%</span>
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h3>Cafe Viena</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$3.85 <span>$5.50</span></p>
            </div>
          </div>
          <!--  -->
          <div class="card-product">
            <div class="container-img">
              <img src="./img/cafe-liqueurs.jpg" alt="Cafe Liqueurs" />
              <div class="button-group">
                <span>
                  <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                  <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                  <i class="fa-solid fa-code-compare"></i>
                </span>
              </div>
            </div>
            <div class="content-card-product">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <h3>Cafe Liqueurs</h3>
              <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
              </span>
              <p class="price">$5.60</p>
            </div>
          </div>
        </div>
      </section>

<!--------------------------- ultimo blog carousel ----------->

<section class="container blogs">
  <h1 class="heading-1">Últimos Blogs</h1>

  <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="container-img">
              <img src="./img/blog-1.jpg" alt="Imagen Blog 1" />
              <div class="button-group-blog">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <span><i class="fa-solid fa-link"></i></span>
              </div>
        </div>
        <div class="card-blog">
          <div class="content-blog">
              <h3>Una Tarde en la Cafetería</h3>
              <span>29 Noviembre 2022</span>
              <p>
                Imagina esta escena: un cálido y acogedor café, con el aroma tentador de granos recién molidos flotando en el aire. En una mesa junto a la ventana, un grupo de amigas se reúne, cada una con una taza de café humeante frente a ellas. El bullicio de la cafetería proporciona un fondo animado para su conversación, mientras comparten risas, historias y confidencias.
              </p>
              <a class="btn-read-more" href=".\index.html">Leer más</a>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="container-img">
              <img src="./img/blog-2.jpg" alt="Imagen Blog 2" />
              <div class="button-group-blog">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <span><i class="fa-solid fa-link"></i></span>
              </div>
        </div>

        <div class="card-blog">
            <div class="content-blog">
              <h3>Una Tarde en la Cafetería</h3>
              <span>29 Noviembre 2022</span>
              <p>
                Imagina esta escena: un cálido y acogedor café, con el aroma tentador de granos recién molidos flotando en el aire. En una mesa junto a la ventana, un grupo de amigas se reúne, cada una con una taza de café humeante frente a ellas. El bullicio de la cafetería proporciona un fondo animado para su conversación, mientras comparten risas, historias y confidencias.
              </p>
              <a class="btn-read-more" href=".\index.html">Leer más</a>
          </div>
        </div>
      </div>


      <div class="swiper-slide">
        <!-- Contenido de la publicación 3 -->
        <div class="container-img">
              <img src="./img/blog-3.jpg" alt="Imagen Blog 3" />
              <div class="button-group-blog">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <span><i class="fa-solid fa-link"></i></span>
              </div>
        </div>

        <div class="card-blog">
          <div class="content-blog">
           <h3>¿Qué hace al café expreso tan especial?</h3>
              <span>29 Noviembre 2022</span>
              <p>
                El café expreso, conocido por su cuerpo intenso y su sabor concentrado, es una bebida que despierta los sentidos y ofrece una experiencia verdaderamente satisfactoria en cada sorbo. Su proceso de preparación meticuloso y su aroma cautivador lo convierten en la elección perfecta para aquellos que buscan una dosis de energía y sabor en su rutina diaria.
              </p>
              <a class="btn-read-more" href=".\pages\expreso.html">Leer más</a>
            </div>
        </div>
      </div>
    
    <!-- Agrega los botones de navegación si lo deseas -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>
    </main>

<!--------------------------- ultimo blog carousel ----------->

    <footer class="footer">
      <div class="container container-footer">
        <div class="menu-footer">
          <div class="contact-info">
            <p class="title-footer">Información de Contacto</p>
            <ul>
              <li>
                Dirección: Glew, Provincia de Buenos Aires
              </li>
              <li>Teléfono: 123-456-7890</li>
              <li>Fax: 55555300</li>
              <li>EmaiL: xxxxx.xxxx@support.com</li>
            </ul>
            <div class="social-icons">
              <span class="facebook">
                <i class="fa-brands fa-facebook-f"></i>
              </span>
              <span class="twitter">
                <i class="fa-brands fa-twitter"></i>
              </span>
              <span class="youtube">
                <i class="fa-brands fa-youtube"></i>
              </span>
              <span class="pinterest">
                <i class="fa-brands fa-pinterest-p"></i>
              </span>
              <span class="instagram">
                <i class="fa-brands fa-instagram"></i>
              </span>
            </div>
          </div>
      <div class="information">
            <p class="title-footer">Información</p>
            
            <ul>
          <li><a href=".\index.php">Inicio</a></li>
          <li><a href=".\pages\expreso.html">Acerca de Nosotros</a></li>
          <li><a href=".\postulaciones.php">Sumate!</a></li>
          <li><a href=".\pages\politica-de-privacidad.html">Políticas de Privacidad</a></li>
          <li><a href=".\pages\terminos-y-condiciones.html">Términos y Condiciones</a></li>
          <li><a href=".\contacto.php">Contáctanos</a></li>
        </ul>
      </div>

      <div class="my-account">
            <p class="title-footer">Mi cuenta</p>

            <ul>
              <li><a href=".\olvidopass\index.php">Mi cuenta</a></li>
              <li><a href=".\newletter.php">Historial de ordenes</a></li>
              <li><a href=".\newletter.php">Lista de deseos</a></li>
              <li><a href=".\newletter.php">Boletín</a></li>
              <li><a href=".\newletter.php">Reembolsos</a></li>
            </ul>
          </div>

          <div class="newsletter">
            <p class="title-footer">Boletín informativo</p>

            <div class="content">
              <p>
                Suscríbete a nuestros boletines ahora y mantente al
                día con nuevas colecciones y ofertas exclusivas.
              </p>
              <input type="email" placeholder="Ingresa el correo aquí...">
              <button><a href="./newletter.php">Suscríbete</a></button>
            </div>
          </div>
        </div>

    <div class="copyright">
      <p>© 2024 Todos los Derechos Reservados - Diseño y Desarrollo: <a href="https://instagram.com/nahuu_espinillo?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" target="_blank">Nahuel Espinillo</a></p>
      <img src="./img/payment.png" alt="Métodos de Pago">
    </div>
  </div>
</footer>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    <script src=".\js\script.js"></script>

<!-- JS de Bootstrap (jQuery requerido) (mejores productos) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  </body>
</html>