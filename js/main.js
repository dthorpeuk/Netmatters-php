//Slideshows
$(".slides").slick({
dots:true,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
draggable:true,
pauseOnHover:true,
pauseOnDotsHover:true

});
$(".ticker1").slick({
    //dots:true,
    // slidesToShow: 10,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    draggable:false,
    variableWidth:true,
    pauseOnHover:true,
pauseOnDotsHover:true

    
    });
    $(".ticker2").slick({
        //dots:true,
       // slidesToShow: 12,
       slidesToScroll: 1,
       infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        draggable:false,
        variableWidth:true,
        pauseOnHover:true,
pauseOnDotsHover:true
        
    
        
        });
//Stick Header
window.onscroll = function(e) {
    
    let elementHeader = document.querySelector(".sticky-hidden");
   
let upNotDown = this.oldScroll > this.scrollY;
let threshold = this.scrollY > 300;
//console.log(this.scrollY);
if(upNotDown && threshold){
    //console.log(true);
    elementHeader.classList.add("sticky");
}
else
{
   // console.log(false);
   elementHeader.classList.remove("sticky");
}
this.oldScroll = this.scrollY;
}

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
//Searchbar Reveal/Hide
let elementSearchbar = document.querySelector(".search-box");
let elementSearchButton = document.querySelector(".search-bar button");
elementSearchButton.addEventListener('click',()=>{
    if(elementSearchbar.classList.contains("search-bar-visible")){
        elementSearchbar.classList.remove("search-bar-visible");
    }
    else{
        elementSearchbar.classList.add("search-bar-visible");
    }
});
//Manage Consent
let elementConsent = document.querySelector(".manage-consent");
let elementDialog = document.querySelector(".cookie-dialog-background");
let elementAccept = document.querySelector(".dialog-row div + div");
elementConsent.addEventListener('click',()=>{
   // if(elementDialog.classList.contains("dialog-visible")){
       // elementDialog.classList.remove("dialog-visible");
   // }else{
        elementDialog.classList.add("dialog-visible");
    //}

});
elementAccept.addEventListener('click',()=>{
   // if(elementDialog.classList.contains("dialog-visible")){
        elementDialog.classList.remove("dialog-visible");
    //}else{
        //elementDialog.classList.add("dialog-visible");
   // }

});

