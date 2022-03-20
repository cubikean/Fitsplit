const ft_nav_mobile_menu = document.querySelector('.ft_nav_mobile_menu')
const ft_nav_sub_menu = document.querySelector('.ft_nav_mobile .ft_nav_sub_menu')
const first = document.getElementById('first')
const second = document.getElementById('second')
const third = document.getElementById('third')

console.log(ft_nav_mobile_menu)

ft_nav_mobile_menu.addEventListener('click', () => {
    ft_nav_sub_menu.classList.toggle('active')
});