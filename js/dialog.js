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