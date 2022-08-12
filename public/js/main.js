


window.addEventListener("scroll", function(e) {
    var logo = document.querySelector(".logo-header");
    logo.classList.toggle("w", window.scrollY > 100)
});


// slider
var counter = 1;
setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
},6000);




