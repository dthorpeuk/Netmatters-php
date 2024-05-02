//Sticky Header
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