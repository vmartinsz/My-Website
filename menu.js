let menu = document.getElementById('menu')
let menuMobile = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')


menu.addEventListener('click', ()=>{
    menuMobile.classList.add('open-menu')
})

menuMobile.addEventListener('click', ()=>{
    menuMobile.classList.remove('open-menu')
})

overlay.addEventListener('click', ()=>{
    menuMobile.classList.remove('open-menu')
})