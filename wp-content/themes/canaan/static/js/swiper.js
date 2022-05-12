import Swiper, { Navigation, Pagination ,Autoplay } from 'swiper';
// import 'swiper/swiper-bundle.css';
import 'swiper/swiper-bundle.min.css'
import 'swiper/swiper.min.css'
Swiper.use([Navigation]);
const swiper = new Swiper('.mySwiper', {
  // observer: true,
  // observeParents: true,
  // parallax: true,
  // direction: 'horizontal',
  // spaceBetween: 30,
  loop: true,
  // slidesPerView: 1,
  // autoplay:true,

  // autoplay: {
  //   delay: 2500,
  //   // disableOnInteraction: false,
  // },
  pagination: {
    // el: ".swiper-pagination",
  },
  navigation: {
    nextEl: '#js-next1',
    prevEl: '#js-prev1',
  },
})
console.log(swiper);


