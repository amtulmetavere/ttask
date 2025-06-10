
    const header = document.getElementById('main-header');
const logo = document.getElementById('logo-img');

const whiteLogo = "assets/logowhite.png";
const colorLogo = "assets/logo.webp";


header.addEventListener('mouseenter', () => {
  header.classList.add('hovered');
  logo.src = colorLogo;
});

header.addEventListener('mouseleave', () => {
  if (window.scrollY <= 10) {
    header.classList.remove('hovered');
    logo.src = whiteLogo;
  }
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    header.classList.add('hovered');
    logo.src = colorLogo;
  } else {
    header.classList.remove('hovered');
    logo.src = whiteLogo;
  }
});

