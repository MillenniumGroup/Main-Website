const headerCont = document.querySelector('.header');
const headerLogo = document.querySelector('.header-logo');
const link = document.querySelector('.link');

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    headerCont.classList.add('header-scrolled');
  } else if (window.scrollY <= 10) {
    headerCont.classList.remove('header-scrolled');
  }
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    headerLogo.classList.add('header-logo-scrolled');
  } else if (window.scrollY <= 10) {
    headerLogo.classList.remove('header-logo-scrolled');
  }
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    link.classList.add('link-scrolled');
  } else if (window.scrollY <= 10) {
    link.classList.remove('link-scrolled');
  }
});