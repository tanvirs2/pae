window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
    if (window.pageYOffset <= sticky) {
        navbar.classList.remove("sticky");
        console.log("Sticky removed");

    } else {
        navbar.classList.add("sticky");
        console.log("Sticky added");
    }
}
//on scroll fix menu\
// project active inactive
$("#favorites").click(function() {
    $("#stars").removeClass("project-active");
    $("#following").removeClass("project-active");
    $(this).addClass("project-active");
});
$("#stars").click(function() {
    $("#favorites").removeClass("project-active");
    $("#following").removeClass("project-active");
    $(this).addClass("project-active");
});
$("#following").click(function() {
    $("#favorites").removeClass("project-active");
    $("#stars").removeClass("project-active");
    $(this).addClass("project-active");
});
