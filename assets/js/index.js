document.addEventListener("DOMContentLoaded", function() {
    const backgrounds = [
        "assets/media/home-main/img1.webp",
        "assets/media/home-main/img02.jpg",
        "assets/media/home-main/img03.jpg",
        "assets/media/home-main/img04.jpg"
    ];

    let currentIndex = 0;

    function changeBackground() {
        const section = document.querySelector('.section_1');
        const content = document.getElementById('con');


        const nextBackground = `url('${backgrounds[currentIndex]}')`;

        section.style.setProperty('--next-background', nextBackground);

        section.classList.remove('animate-slide');
        void section.offsetWidth; 
        section.classList.add('animate-slide'); 
 
        setTimeout(() => {
            section.style.backgroundImage = nextBackground;
            section.classList.remove('animate-slide');
        }, 2000); 

        currentIndex = (currentIndex + 1) % backgrounds.length;
    }

    changeBackground();

    setInterval(changeBackground, 5000);
});

$(document).ready(function(){
    $(".content-card").hover(function(){
        $(this).css("background-color", "rgb(241, 236, 236)");
        $(this).find("h4").css("color", "orangered");
        $(this).find(".read-more-btn").css("color", "orangered");
    }, function(){
        $(this).css("background-color", "");
        $(this).find("h4").css("color", "");
        $(this).find(".read-more-btn").css("color", "");
    });

    $(".read-more-btn").hover(function(){
        $(this).css("background-color", "orangered");
        $(this).css("color", "white");
    }, function(){
        $(this).css("background-color", "");
        $(this).css("color", "");
    });
});

let scrollContainer = document.querySelector(".book-werp");
let backBtn = document.getElementById("backbtn");
let nextBtn = document.getElementById("nextbtn");


nextBtn.addEventListener("click", () => {
    scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
});
backBtn.addEventListener("click", () => {
    scrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
});

// Auto-scrolling
let autoScrollInterval = setInterval(() => {
    if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth) {
        scrollContainer.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
        scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    }
}, 3500); 


scrollContainer.addEventListener("mouseover", () => clearInterval(autoScrollInterval));
scrollContainer.addEventListener("mouseout", () => {
    autoScrollInterval = setInterval(() => {
        if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth) {
            scrollContainer.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
        }
    }, 3500);
});

window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for(var i = 0;i < reveals.length;i++){
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;
        
        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}


let popUp = document.getElementById("cookiePopup");

const checkCookie = () => {
    let hasCookie = document.cookie.split(";").some((cookie) => cookie.trim().startsWith("user_agreement="));
    if (hasCookie) {
        popUp.classList.add("hide");
        popUp.classList.remove("show");
    } else {
        popUp.classList.add("show");
        popUp.classList.remove("hide");
    }
};

window.onload = () => {
    setTimeout(() => {
        checkCookie();
    }, 1000);
};

document.getElementById("acceptcookies").addEventListener("click", () => {
    popUp.classList.add("hide");
    popUp.classList.remove("show");
});

let closeCookies = document.querySelector(".close-coockies"); 
closeCookies.addEventListener("click", () => {
    popUp.classList.add("hide");
    popUp.classList.remove("show");
});