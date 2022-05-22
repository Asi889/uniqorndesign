
import Swiper, { Navigation } from 'swiper';
// import 'swiper/swiper-bundle.min.css'
// import 'swiper/swiper.min.css'
Swiper.use([Navigation]);

class PartnersSwiper{
    constructor(el, options){
        console.log(options);
        const swiper = new Swiper(options.className, {
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            slidesPerView: 6,
            grabCursor: true,
            loop: true,
            breakpoints: {
                1280: {
                    slidesPerView: 8,
                },
            }
          })
    }
}

export default PartnersSwiper;