var search = document.querySelector(".search");
var searchModal = document.querySelector(".search-modal");
var storage = localStorage.getItem("login");

search.addEventListener("mouseover", function (event){
    event.preventDefault();
    searchModal.classList.add("search-modal-show");
    searchModal.style.display="block";
    searchModal.querySelector("input").focus();
});

search.addEventListener("mouseout", function (event){
    event.preventDefault();
    searchModal.style.display="none";
    searchModal.querySelector("label").classList.remove("search-label-show");
});

searchModal.addEventListener("mouseover", function (event){
    event.preventDefault();
    searchModal.classList.add("search-modal-show");
    searchModal.style.display="block";
    searchModal.querySelector("input").focus();
});

searchModal.addEventListener("mouseout", function (event){
    event.preventDefault();
    searchModal.style.display="none";
    searchModal.querySelector("label").classList.remove("search-label-show");
});

var login = document.querySelector(".user-block");
var loginModal = document.querySelector(".login-modal");

if (document.querySelector(".login")){
    login.addEventListener("mouseover", function (event){
        event.preventDefault();
        loginModal.classList.add("login-modal-show");
        loginModal.querySelector("input").focus();
    });

    loginModal.addEventListener("mouseover", function (event){
        event.preventDefault();
        loginModal.classList.add("login-modal-show");
    });

    login.addEventListener("mouseout", function (event){
        event.preventDefault();
        loginModal.classList.remove("login-modal-show");
    });

    loginModal.addEventListener("mouseout", function (event){
        event.preventDefault();
        loginModal.classList.remove("login-modal-show");
    });
}

var greetingModal = document.querySelector(".personal-office");

if(document.querySelector(".greeting")){
    login.addEventListener("mouseover", function (event){
        event.preventDefault();
        greetingModal.style.display="block";
    });

    greetingModal.addEventListener("mouseover", function (event){
        event.preventDefault();
        greetingModal.style.display="block";
    });

    login.addEventListener("mouseout", function (event){
        event.preventDefault();
        greetingModal.style.display="none";
    });

    greetingModal.addEventListener("mouseout", function (event){
        event.preventDefault();
        greetingModal.style.display="none";
    });
}



/* Registration modal*/

var btnRegistration = document.querySelector(".registration");
var modalRegistration = document.querySelector(".registration-modal");
var closeRegistration = document.querySelector(".registration-modal-close");

btnRegistration.addEventListener("click", function (event){
    event.preventDefault();
    modalRegistration.style.display="block";
});

closeRegistration.addEventListener("click", function (event){
    event.preventDefault();
    modalRegistration.style.display="none";
});

/* Registration modal*/

/* Basket modal */
var basket = document.querySelector(".basket-block");
var basketModal = document.querySelector(".basket-modal");

basket.addEventListener("mouseover", function (event){
    event.preventDefault();
    basketModal.style.display="block";
});

basketModal.addEventListener("mouseover", function (event){
    event.preventDefault();
    basketModal.style.display="block";
});

basket.addEventListener("mouseout", function (event){
    event.preventDefault();
    basketModal.style.display="none";
});

basketModal.addEventListener("mouseout", function (event){
    event.preventDefault();
    basketModal.style.display="none";
});

/* Basket modal */

// var feedbackLink = document.querySelector(".feedback-block a");
// var feedbackModal = document.querySelector(".feedback-modal");
// var feedbackClose = feedbackModal.querySelector(".feedback-modal-close");
// var feedbackBackground = document.querySelector(".modal-overlay");
//
// var name = feedbackModal.querySelector("[name=name]");
// var password = feedbackModal.querySelector("[name=email]");
//
// feedbackLink.addEventListener("click", function (event){
//     event.preventDefault();
//     feedbackModal.classList.add("feedback-modal-show");
//     feedbackBackground.classList.add("modal-overlay-show");
//
//     if (storage) {
//         name.value = storage;
//         password.focus();
//     } else {
//         name.focus();
//     }
// });
//
// feedbackClose.addEventListener("click", function (event){
//     event.preventDefault();
//     feedbackModal.classList.remove("feedback-modal-show");
//     feedbackBackground.classList.remove("modal-overlay-show");
// });

//Range slider
var slider = document.getElementById("slider");
var amount = document.getElementById("amount");
$( function() {
    $(slider).slider({
        range: true,
        min: 10,
        max: 800,
        step: 10,
        values: [ 100, 500 ],
        slide: function( event, ui ) {
            $( amount ).text(ui.values[ 0 ] + " грн. - "  + ui.values[ 1 ] + " грн.");
        }
    });
    $( amount ).text($( slider ).slider( "values", 0 ) + " грн. - "  + $( slider ).slider( "values", 1 ) + " грн.");
} );

