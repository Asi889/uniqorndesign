import '../css/tailwind.css';
import '../css/style.scss';
import "../css/hamburger.css";
import AxeCheck from './AxeCheck';
import Hamburger from './Hamburger';
import ContactUsForm from './ContactUsForm';
// import ArchiveProject from './ArchiveProject';
import {MagicFilter} from './MagicFilter';
import TestimonialsSwiper from './TestimonialsSwiper';
import PartnersSwiper from './PartnersSwiper';
import LoadMore from './LoadMore';


const components = [
  {
    Class: PartnersSwiper,
    selector: '.partners-gallery-swiper-js',
    options: {
      className:'.partners-gallery-swiper-js'
    },
  },
  // {
  //   Class: LoadMore,
  //   selector: '.load-more-project-js',
  //   options: {},
  // },
  {
    Class: TestimonialsSwiper,
    selector: '.testimonials-swiper',
    options: {},
  },
  // {
  //   Class: ArchiveProject,
  //   selector: '.archive-project-wrapper',
  //   options: {},
  // },
  {
    Class: MagicFilter,
    selector: '.magic-filter-wrapper',
    options: {},
  },
  {
    Class: ContactUsForm,
    selector: '#contact-us-form',
    options: {},
  },
  {
    Class: Hamburger,
    selector: '.hamburger',
    options: {},
  },
  {
    Class: AxeCheck,
    selector: ".axe-is-dev",
    options: {},
  },
];


window.addEventListener('load', function () {
  console.log("Built By naaman, https://naamanfrenkel.dev/");
});

window.addEventListener('DOMContentLoaded', function () {
  components.forEach(component => {
    if (document.querySelector(component.selector) !== null) {
      document
        .querySelectorAll(component.selector)
        .forEach(element => new component.Class(element, component.options));
    }
  });
});