const menuBtn = document.getElementById('menuBtn');
const closeBtn = document.getElementById('closeBtn');
const nav = document.getElementById('nav');
const home = document.getElementById('home');
const newsMenu = document.getElementById('newsMenu');
const searchBtn = document.getElementById('searchBtn');
const searchFeild = document.getElementById('searchFeild');

menuBtn.addEventListener('click', ()=>{
    nav.style = "right: 0;";
});

closeBtn.addEventListener('click', ()=>{
    nav.style = "right: -110%;";
});

searchBtn.addEventListener('click', ()=>{
    searchFeild.classList.toggle("searchActive");
});