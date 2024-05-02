var form = document.querySelector(".form-enquiry");
var messageArea = document.querySelector(".message-area");
var closeButton = document.querySelector(".close");
function createMessagesForRows(rows,type){
   var rowList = rows.split('<br>');
   for(let i = 0;i<rowList.length;i++){
    createMessage(rowList[i],type);
   }
   
}
function createMessage(name,type){
    if(name!=""){
        messageArea.innerHTML+= "<div class='validation-message " + type + "'><button type='button' class='close'>×</button>" + name + "</div>";
    }
    
}
function submitForm(e){
e.preventDefault();
var formData = new FormData(form);
fetch('/Netmatters-Replica-php/formValidation.php',{
    method: "POST",
    body: formData,
  }).then(response =>
    { if(!response.ok){
        throw new Error("Bad Response");
    }
    return response.text();
    }).then(res => {
        console.log(res);
        messageArea.innerHTML = "";
        if(res.includes("Your message has been sent!")){
            createMessage(res,"good");
        }
        else{
            createMessagesForRows(res,"bad");
        }
    })
    .catch(error => console.log(error));
}

form.addEventListener('submit',submitForm);
messageArea.addEventListener('click',(e)=>{
    if(e.target.classList.contains('close')){
        e.target.parentNode.remove();
    }

});