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

scrollContainer.addEventListener("wheel",(evt)=>{
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.style.scrollBehavior = "auto";
});

nextBtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += 1200;
});
backBtn.addEventListener("click",()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft -= 1200;
});