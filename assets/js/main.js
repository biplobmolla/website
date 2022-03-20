// Back To Top

let bttb = document.getElementById("bttb");

bttb.addEventListener("click", function () {
    // console.log("You have clicked");
    // this.scrollTo == 0;
    window.scrollTo({
        top: 0
    });
});


// Menu 

const close = document.getElementById("close");
const menu = document.getElementById("menu");
const navList = document.getElementById("navlist");
const navFirst = document.getElementById("nav-first");

menu.addEventListener("click", () => {
    active.style.display = "block";
    navList.style.left = "0";
});

close.addEventListener("click", () => {
    active.style.display = "none";
    navList.style.left = "-100vw";
});

navList.addEventListener('click', function (e) {
    if (e.target.id != 'nav-first') {
        document.body.classList.remove("active");
        active.style.display = "none";
        navList.style.left = "-100vw";
    }
});




// Portfolio Redirect

let cardTitle = document.getElementsByClassName('card-title');
let cardImage = document.getElementsByClassName('card-image');
let cardBtn = document.getElementsByClassName('card-button');
let cardBtnIndex = document.getElementsByClassName('card-button');
let image = ['personal.jpg', 'school.jpg', 'the-celebrity.jpg', 'trust-family.jpg', 'post-type.jpg', 'hospital.jpg', 'leon-engineering-works.jpg', '3dwebsite.jpg'];
let title = ['Personal', 'School', 'The celebrity', 'Trust family', 'Social post type', 'Hospital', 'Business', '3D Website'];


for (i = 0; i < cardImage.length; i++) {
    var img = document.createElement('img');
    cardImage[i].appendChild(img).setAttribute('src', `images/${image[i]}`);
}

for (i = 0; i < cardBtn.length; i++) {
    cardTitle[i].innerText = title[i];
}

for (let i = 0; i < cardBtn.length; i++) {
    cardBtn[i].addEventListener('click', function (e) {
        if (e.target.className == 'card-button') {
            window.location.href = `./portfolio/${title[i]}/index.html`;
        }
    });
}


const submit = document.getElementById('submit');
const active = document.getElementById('active');
const message = document.getElementById('message');
const body = document.getElementById('body');

submit.addEventListener('click', () => {
    active.style.display = "block";
    body.style.overflow = "hidden";
    message.style = "opacity: 1; top: 50%;";
    message.innerHTML = "<h4>Contact form is not in working right now.</h4>";
});


// AOS = Animation On Scroll 

AOS.init();


// Preloader

const preloader = document.getElementById('preloader');
const circles = document.getElementById('circles');

window.addEventListener('load', function () {
    preloader.style.display = "none";
    circles.style.display = "none";
});

active.addEventListener('click', function () {
    active.style.display = "none";
    navList.style.left = "-100vw";
});