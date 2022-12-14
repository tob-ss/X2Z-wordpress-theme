const menuToggle = document.querySelector('#mobile-menu')
const menu = document.querySelector('.sidebar')
const menuLinks = document.querySelector('.sidebar__item')
const navLogo = document.querySelector('.sidebar__title')

const mobileMenu = () => {
    console.log("event listening!")
    menu.classList.toggle('active')
    menuToggle.classList.toggle('active')
}

menuToggle.addEventListener('click', mobileMenu);

const hideMobileMenu = () => {
    const menuBars = document.querySelector('active')
    if(window.innerWidth <= 960 && menuBars) {
    menu.classList.toggle('active')
    }
}

menuLinks.addEventListener('click', hideMobileMenu)
navLogo.addEventListener('click', hideMobileMenu)