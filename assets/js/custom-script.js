//initialisation du carrousel
const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 'auto',
    centeredSlides: true,
    initialSlide: 0,
    spaceBetween: 65,  
    effect: 'coverflow',
    grabCursor: true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    }
});


 // Fonction pour initialiser ou détruire Scrollr en fonction de la largeur de l'écran
 if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    skrollr.init().destroy(); // Détruire Scrollr sur mobile
} else {
    skrollr.init({
        smoothScrolling: true,
        forceHeight: false
    });
}

//définis un écouteur pour vérifier la position d'un élément par rapport à la fenêtre d'affichage pour apparition des éléments
window.addEventListener('scroll', function() {
    var toAnimElements = document.querySelectorAll('.toAnim');
  
    toAnimElements.forEach(function(element) {
      var windowHeight = window.innerHeight;
      var elementPosition = element.getBoundingClientRect().top;
      var scrollPosition = window.scrollY;
  
      if (scrollPosition > elementPosition - (windowHeight * 0.3)) {
        element.classList.add('anim');
      } else {
        element.classList.remove('anim');
      }
    });
  });

//définis un écouteur pour vérifier la position d'un élément par rapport à la fenêtre d'affichage pour translation des backgrounds de titres
window.addEventListener('scroll', function() {
  var toAnimElements = document.querySelectorAll('.toAnimUp');

  toAnimElements.forEach(function(element) {
    var windowHeight = window.innerHeight;
    var elementPosition = element.getBoundingClientRect().top;
    var scrollPosition = window.scrollY;

    if (scrollPosition > elementPosition - (windowHeight * 0.3)) {
      element.classList.add('animUp');
    } else {
      element.classList.remove('animUp');
    }
  });
});