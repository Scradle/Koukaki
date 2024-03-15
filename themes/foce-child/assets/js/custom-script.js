//initialisation du carrousel
const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 'auto',
    centeredSlides: false,
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
    }   
});

//initialisation des animations au scroll 
var s = skrollr.init({
  forceHeight: false,
  smoothScrolling: true,
});

/* pour bloquer skrollr basse résolution
var windowWidth = window.innerWidth;

if (windowWidth > 700) {
  var s = skrollr.init({
    forceHeight: false,
    smoothScrolling: true,
  });
}*/

//définis un écouteur pour vérifier la position d'un élément par rapport à la fenêtre d'affichage pour apparition des éléments
window.addEventListener('scroll', function() {
    var toAnimElements = document.querySelectorAll('.toAnim');
  
    toAnimElements.forEach(function(element) {
      var windowHeight = window.innerHeight;
      var elementPosition = element.getBoundingClientRect().top;
      var scrollPosition = window.scrollY;
  
      if (scrollPosition > elementPosition - (windowHeight * 0.5)) {
        element.classList.add('anim');
      } else {
        element.classList.remove('anim');
      }
    });
  });

//définis un écouteur pour vérifier la position d'un élément par rapport à la fenêtre d'affichage pour translation des titres
window.addEventListener('scroll', function() {
  var toAnimElements = document.querySelectorAll('.toAnimUp');

  toAnimElements.forEach(function(element) {
    var windowHeight = window.innerHeight;
    var elementPosition = element.getBoundingClientRect().top;
    var scrollPosition = window.scrollY;

    if (scrollPosition > elementPosition - (windowHeight * 0.5)) {
      element.classList.add('animUp');
    } else {
      element.classList.remove('animUp');
    }
  });
});