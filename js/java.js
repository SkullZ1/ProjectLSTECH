//smooth scrolling
mybutton = document.getElementById("myBtn");
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0;
}



var app = new Vue({
    el: "#app",
    data: {
        message: "Hello Sobat Tech!"
    }
})

//one way bind
var app = new Vue({
    el: "#app1",
    data: {
        message: "Hello Sobat Tech!"
    }
})

//two way bind
var app = new Vue({
    el: "#app2",
    data: {
        message: "Hello Sobat Tech!"
    }
})

$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });
        });

 