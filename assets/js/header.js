const ft_nav_mobile_menu = document.querySelector('.ft_nav_mobile_menu')
const ft_nav_sub_menu = document.querySelector('.ft_nav_mobile .ft_nav_sub_menu')
const first = document.getElementById('first')
const second = document.getElementById('second')
const third = document.getElementById('third')
const menu = document.querySelector('.menu')
const menu_toggle_desk = document.querySelector('.menu_toggle_desk')

console.log(ft_nav_mobile_menu)

ft_nav_mobile_menu.addEventListener('click', () => {
    ft_nav_sub_menu.classList.toggle('active')
    first.classList.toggle('active')
    second.classList.toggle('active')
    third.classList.toggle('active')
});

menu.addEventListener('click', ()=>{
    menu_toggle_desk.classList.toggle('active')
});