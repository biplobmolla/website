const menu = document.getElementById('hamburger');
const close = document.getElementById('close');
const nav = document.getElementById('nav');
let link = document.querySelectorAll('nav a');

for (let i = 0; i < link.length; i++) {
    link[i].addEventListener('click', () => {
        nav.style.right = "-120%";
    });
}

menu.addEventListener('click', () => {
    nav.style = 'display: block; right: 0;';
});

close.addEventListener('click', () => {
    nav.style.right = "-120%";
});