let nav = document.querySelector('.nav__mobile')
nav.style.display = 'none'
let menuHamburguer = document.querySelector('.header__hamburguer')
let navLinks = document.querySelectorAll('.nav__mobile a')

function openMenu() {
  if (nav.style.display == 'none') {
    nav.style.display = 'block'
  } else {
    nav.style.display = 'none'
  }
}

navLinks.forEach(item => item.addEventListener('click', function() {
  return true
}))

menuHamburguer.addEventListener('click', function() {
  openMenu()
})

