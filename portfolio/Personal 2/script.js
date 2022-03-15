$(document).ready(function(){
    $(".fa-bars").click(function(){
        $(".nav ul").toggleClass("active");
        $(".fa-bars").toggleClass("active");
    });
});