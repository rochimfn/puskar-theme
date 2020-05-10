if(localStorage.getItem('darkmode') == 'true') {
  toogleDarkMode();
  localStorage.setItem('darkmode', 'true');
}

const buttonTrigger = document.querySelector('#dark-mode');

buttonTrigger.addEventListener('click', toogleDarkMode);

function toogleDarkMode() {
    if(localStorage.getItem('darkmode') == 'true') {
      localStorage.setItem('darkmode', 'false');
    } else {
      localStorage.setItem('darkmode', 'true');
    }
    document.querySelector('body').classList.toggle('dark');
    document.querySelector('nav').classList.toggle('is-dark');
    document.querySelector('#navbarBasicExample').classList.toggle('dark');
    document.querySelector('.box').classList.toggle('dark');
    document.querySelector('footer').classList.toggle('dark');
    document.querySelectorAll('div.card-content').forEach(
      (item) => item.classList.toggle('dark')
    )
}