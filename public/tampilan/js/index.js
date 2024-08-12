document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
  
    window.onscroll = function () {
      if (!header) return;
      const navFixed = header.offsetTop;
  
      if (window.pageYOffset > navFixed) {
        header.classList.add('navbar-fixed');
      } else {
        header.classList.remove('navbar-fixed');
      }
    };
  
    const hamburger = document.getElementById('hamburger-menu');
    const navMenu = document.getElementById('nav-menu');
  
    function handleClick() {
      if (hamburger) {
        hamburger.classList.toggle('hamburger-active');
      }
      if (navMenu) {
        navMenu.classList.toggle('hidden');
      }
    }
  
    if (hamburger) {
      hamburger.addEventListener('click', handleClick);
    }
  
    // Cleanup event listener on component unmount
    window.addEventListener('beforeunload', function () {
      if (hamburger) {
        hamburger.removeEventListener('click', handleClick);
      }
    });
  });
  
  // Butonn pendaftaran
  
  const daftar = document.querySelector('.daftar');
  
  daftar.addEventListener('click', () => {
    window.location = 'https://docs.google.com/forms/d/e/1FAIpQLSdq4vBGGL39FfFjVL5EHbCR61L2GgCfI0XRjK0Hc_OvVUgnPg/viewform?usp=sf_link';
  });
  