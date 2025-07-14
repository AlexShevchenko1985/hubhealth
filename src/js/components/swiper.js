import Swiper from "swiper";
import "swiper/css";

const swiper = () => {



    if(!sigmaData.slides){
        return;
    }

    const slidesData = sigmaData.slides;

    const mainSlider = new Swiper('.main-slider', {
        slidesPerView: 1,
        effect: 'fade',
        loop: false,
        allowTouchMove: true,
        on: {
            slideChange: () => {
                renderThumbs(mainSlider.realIndex);
            }
        },
        speed: 1000,
    });

    const $container = document.querySelector('.modules-slider');

    if (!$container) {
        return;
    }

    const thumbsSlider = document.getElementById('thumbsSlider');
    const prevBtn = document.getElementById('prevThumbs');
    const nextBtn = document.getElementById('nextThumbs');

    function renderThumbs(activeIndex) {
        thumbsSlider.innerHTML = '';
        const total = slidesData.length;

        const nextThumbs = [];
        for (let i = 1; nextThumbs.length < 2; i++) {
            nextThumbs.push((activeIndex + i) % total);
        }

        nextThumbs.forEach(i => {
            const slide = slidesData[i];
            const thumb = document.createElement('div');
            thumb.className = 'thumb';
            thumb.innerHTML = `<img src="${slide.thumb}" alt="Thumb ${i + 1}" /><div><p>${slide.title}</p><span>0${i + 1}</span></div>`;
            thumb.addEventListener('click', () => mainSlider.slideTo(i));
            thumbsSlider.appendChild(thumb);
        });
    }

    // Make nav buttons control the main slider
    prevBtn.addEventListener('click', () => {
        const currentIndex = mainSlider.realIndex;
        const prevIndex = (currentIndex - 1 + slidesData.length) % slidesData.length;
        mainSlider.slideTo(prevIndex);
    });

    nextBtn.addEventListener('click', () => {
        const currentIndex = mainSlider.realIndex;
        const nextIndex = (currentIndex + 1) % slidesData.length;
        mainSlider.slideTo(nextIndex);
    });

    // Initial
    renderThumbs(0);

};

export default swiper;
