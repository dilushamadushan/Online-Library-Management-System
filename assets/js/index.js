document.addEventListener("DOMContentLoaded", function() {
    const backgrounds = [
        "assets/media/home-main/img1.jpg",
        "assets/media/home-main/img2.jpg",
        "assets/media/home-main/img3.jpg",
        "assets/media/home-main/img4.jpg"
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