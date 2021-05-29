function menuToggle(){
    const toggleMenu = document.querySelector('.profilMenu')
    toggleMenu.classList.toggle('activate')
}

VanillaTilt.init(document.querySelectorAll(".product"),{
    max: 25,
    speed: 400
});

var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 0,
      modifier: 1,
      slideShadows : true,
    },
    loop:  true,
  });