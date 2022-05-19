
import Swiper, { Navigation } from 'swiper';
import 'swiper/swiper-bundle.min.css'
import 'swiper/swiper.min.css'
Swiper.use([Navigation]);

class TestimonialsSwiper{
    constructor(el, options){
        const swiper = new Swiper('.testimonials-swiper-js', {
            loop: true,
            navigation: {
              nextEl: ".swiper-button-next-js",
              prevEl: ".swiper-button-prev-js",
            },
          })
    }
}

export default TestimonialsSwiper;