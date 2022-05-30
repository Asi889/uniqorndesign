class Hamburger{
    constructor(el, options){
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

    }
}
// class Hamburger{
//   constructor(el, options){
//       this.toggle = this.toggle.bind(this)
//       this.open = this.open.bind(this)
//       this.close = this.close.bind(this)


//       this.isOpen = false
//       this.btn = el;
//       this.menu = document.querySelector(`.mobile-menu-js`);
//       this.btn.addEventListener('click', this.toggle)
//   }

//   toggle(){
//       if( !this.isOpen){
//           this.open()
//       } else{
//           this.close()
//       }
//   }
//   open(){
//       this.isOpen = true
//       this.menu.classList.add('open')
//       this.btn.classList.add('open')
//       document.querySelector(`html`).classList.add('no-scroll')
//   }
//   close(){
//       this.isOpen = false
//       this.menu.classList.remove('open')
//       this.btn.classList.remove('open')
//       document.querySelector(`html`).classList.remove('no-scroll')


//   }
// }

export default Hamburger;