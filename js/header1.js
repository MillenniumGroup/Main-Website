const headerCont = document.querySelector('.header1');
const headerLogo = document.querySelector('.header1-logo');
const link = document.querySelector('.link');

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    headerCont.classList.add('header1-scrolled');
  } else if (window.scrollY <= 10) {
    headerCont.classList.remove('header1-scrolled');
  }
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    headerLogo.classList.add('header1-logo-scrolled');
  } else if (window.scrollY <= 10) {
    headerLogo.classList.remove('header1-logo-scrolled');
  }
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    link.classList.add('link1-scrolled');
  } else if (window.scrollY <= 10) {
    link.classList.remove('link1-scrolled');
  }
});