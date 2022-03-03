var toggle = document.querySelector('#menu-toggle');
var menu = document.querySelector('.menu-primary-container');

toggle.addEventListener('click', function(){
  if (menu.classList.contains('expand')) {
    this.setAttribute('aria-expanded', 'false');
    menu.classList.remove('expand');
  } else {
    menu.classList.add('expand'); 
    this.setAttribute('aria-expanded', 'true');
  }
});