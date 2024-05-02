//Sidebar reveal/hide
let elementSidebar = document.querySelector(".sidebar");
let elementHamburger = document.querySelectorAll(".hamburger-btn");
let elementHamburgerInner = document.querySelectorAll(".hamburger-inner");
let elementContent = document.querySelector(".page-contents");
let elementFilter = document.querySelector(".full-filter");
elementHamburger[0].addEventListener('click', ()=>{
    if(elementSidebar.classList.contains("side-visible")){
        elementSidebar.classList.remove("side-visible");
        elementFilter.classList.remove("side-active");
        elementContent.classList.remove("side-active-pc");
        elementHamburgerInner[0].classList.remove("side-active-ham");
        elementHamburgerInner[1].classList.remove("side-active-ham");
    }
    else{
        elementSidebar.classList.add("side-visible");
        elementFilter.classList.add("side-active");
        elementContent.classList.add("side-active-pc");
        elementHamburgerInner[0].classList.add("side-active-ham");
        elementHamburgerInner[1].classList.add("side-active-ham");
    }
    
    

});
elementHamburger[1].addEventListener('click', ()=>{
    if(elementSidebar.classList.contains("side-visible")){
        elementSidebar.classList.remove("side-visible");
        elementFilter.classList.remove("side-active");
        elementContent.classList.remove("side-active-pc");
        elementHamburgerInner[0].classList.remove("side-active-ham");
        elementHamburgerInner[1].classList.remove("side-active-ham");
    }
    else{
        elementSidebar.classList.add("side-visible");
        elementFilter.classList.add("side-active");
        elementContent.classList.add("side-active-pc");
        elementHamburgerInner[0].classList.add("side-active-ham");
        elementHamburgerInner[1].classList.add("side-active-ham");
    }
    
    

});
elementFilter.addEventListener('click', ()=>{
    if(elementSidebar.classList.contains("side-visible")){
        elementSidebar.classList.remove("side-visible");
        elementFilter.classList.remove("side-active");
        elementContent.classList.remove("side-active-pc");
        elementHamburgerInner[0].classList.remove("side-active-ham");
        elementHamburgerInner[1].classList.remove("side-active-ham");
    }

      

});