if(window.matchMedia("(min-width: 576px)").matches) {
  const menuBtns = document.querySelectorAll('.nav__link--dropdown');
  const drops = document.querySelectorAll('.nav__item-submenu');

  menuBtns.forEach(el => {
    el.addEventListener('mouseover', (e) => {
      let currentBtn = e.currentTarget;
      let drop = currentBtn.closest('.nav__item').querySelector('.nav__item-submenu');

      menuBtns.forEach(el => {
        if (el !== currentBtn) {
          el.classList.remove('nav__link--active');
        }
      });

      drops.forEach(el => {
        if (el !== drop) {
          el.classList.remove('nav__item-submenu--active');
        }
      });

      drop.classList.add('nav__item-submenu--active');
      currentBtn.classList.add('nav__link--active');
    });
  });

  document.addEventListener('mouseover', (e) => {
    if (!e.target.closest('.header-menu__nav')) {
      menuBtns.forEach(el => {
        el.classList.remove('nav__link--active');
      });

      drops.forEach(el => {
        el.classList.remove('nav__item-submenu--active');
      });
    }
  });
} else {
  const menuBtns = document.querySelectorAll('.nav__link--dropdown');
  const drops = document.querySelectorAll('.nav__item-submenu');

  menuBtns.forEach(el=>{
    el.addEventListener('click', (e)=>{
      let currentBtn = e.currentTarget;
      let drop = currentBtn.closest('.nav__item').querySelector('.nav__item-submenu');

      menuBtns.forEach(el => {
        if (el !== currentBtn) {
          el.classList.remove('nav__link--active');
        }
      });

      drops.forEach(el => {
        if (el !== drop) {
          el.classList.remove('nav__item-submenu--active');
        }
      });

      drop.classList.add('nav__item-submenu--active');
      currentBtn.classList.add('nav__link--active');
    })
  })
}
