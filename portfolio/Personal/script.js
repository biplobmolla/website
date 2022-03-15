$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $(".navbar").addClass("sticky");
        }else{
            $(".navbar").removeClass("sticky");
        }

        if(this.scrollY>500){
            $(".scroll_up_btn").addClass("show");
        }else{
            $(".scroll_up_btn").removeClass("show");
        }
    });

    var typed = new Typed(".typing",{
        strings: ["Developer","Designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-2",{
        strings: ["Developer","Designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    $(".scroll_up_btn").click(function(){
        $("html").animate({scrollTop: 0});
    });

    $(".menu_btn").click(function(){
        $(".navbar .menu").toggleClass("active");
        $(".menu_btn i").toggleClass("active");
    });

    $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
})