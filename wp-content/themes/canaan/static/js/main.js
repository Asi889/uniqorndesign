import '../css/tailwind.css';
import '../css/style.scss';
import "../css/hamburger.css";
import './swiper';
import AxeCheck from './AxeCheck';
import { formfunction } from './form';
import { archiveProjecteFunc } from './archiveProjecteFunc';


const components = [
  // {
  //   Class: ScrollNav,
  //   selector: 'html',
  //   options: {},
  // },
  // {
  //   Class: AxeCheck,
  //   selector: ".axe-is-dev",
  //   options: {},
  // },
];


window.addEventListener('load', function () {
  console.log("Built By naaman, https://naamanfrenkel.dev/");
});

window.addEventListener('DOMContentLoaded', function () {
  let form = document.querySelector('#contact-us-form');
  if (form) {
    formfunction(form)
  }

  let project = document.querySelector('.archive-project-wrapper');
  if (project) {
    archiveProjecteFunc(project)
  }

  function navbarfunction() {
    // document.querySelector(".portfolioDisc").style.height = "0Px";
    document.querySelector(".portfolioDisc").style.height = "calc(100vh - 52px)";
    document.querySelector(".hamburger").style.display = "none";
    document.querySelector(".hamburger1").style.display = "flex";
  }
  function closeNav() {
    document.querySelector(".portfolioDisc").style.height= "0px";
    document.querySelector(".hamburger").style.display = "flex";
    document.querySelector(".hamburger1").style.display = "none";

  }
  document.querySelector(".hamburger").addEventListener('click', navbarfunction)
  document.querySelector(".hamburger1").addEventListener('click', closeNav)

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