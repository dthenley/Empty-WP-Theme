/**
 * Action when clicking menu-toggle on mobile menu
 */
const toggle = document.querySelector('#menu-toggle');
const menu = document.querySelector('.menu-primary-container');

toggle.addEventListener('click', function(){
  if (menu.classList.contains('expand')) {
    this.setAttribute('aria-expanded', 'false');
    menu.classList.remove('expand');
  } else {
    menu.classList.add('expand'); 
    this.setAttribute('aria-expanded', 'true');
  }
});

/**
 * Checks for class with menu-item-has-children and add button
 */
let dropdownMenuItem = document.querySelectorAll('.menu-item-has-children');
let dropdownButton = '<button class="dropdown-button">+</button>';

dropdownMenuItem.forEach(dropDownElement => { dropDownElement.innerHTML += dropdownButton })


document.querySelectorAll('.dropdown-button').forEach(dropdownButtonElement => {
  dropdownButtonElement.addEventListener('click', function(){
    this.classList.toggle('expand');
  })
})