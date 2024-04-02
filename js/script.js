/*------------------------------  boton hacia formulario ("Sumate!")-------------------------------------------*/

document.addEventListener("DOMContentLoaded", function() {
    var scrollToFormButton = document.getElementById("scrollToForm");
    var formElement = document.getElementById("miFormulario");

    scrollToFormButton.addEventListener("click", function() {
        // Obtenemos la posición del formulario
        var formPosition = formElement.offsetTop;

        // Animamos el desplazamiento de la página hacia la posición del formulario
        window.scrollTo({
            top: formPosition,
            behavior: "smooth" // Desplazamiento suave
        });
    });
});

/*------------------------------  boton hacia formulario ("Contacto!")-------------------------------------------*/


document.addEventListener("DOMContentLoaded", function() {
    var scrollToFormButton = document.getElementById("scrollToForm");
    var formElement = document.getElementById("miFormulario");

    scrollToFormButton.addEventListener("click", function() {
        // Obtenemos la posición del formulario
        var formPosition = formElement.offsetTop;

        // Animamos el desplazamiento de la página hacia la posición del formulario
        window.scrollTo({
            top: formPosition,
            behavior: "smooth" // Desplazamiento suave
        });
    });
});



/*------------------------------  boton Últimos Blogs--------------------------------*/


  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });


/*----------------------------------usuario -------------------------------------*/

document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.menu');

  menuToggle.addEventListener('click', function() {
    const expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !expanded);
    menu.classList.toggle('open');
  });
});
