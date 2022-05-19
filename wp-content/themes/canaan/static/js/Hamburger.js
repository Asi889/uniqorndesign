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

export default Hamburger;