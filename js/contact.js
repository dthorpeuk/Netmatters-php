//Contact Us collapsable menu
let elementQuestionText = document.querySelector(".question-text");
let elementAnswer = document.querySelector(".answer");
let elementAncor = document.querySelector(".question a");

elementAncor.addEventListener('click',(e)=>{
    e.preventDefault();
});

//$(".answer").animate({height:"auto"},200);
var winWidth;
var ansHeight;
elementQuestionText.addEventListener('click',()=>{
    winWidth = window.innerWidth;
    ansHeight;
    if(winWidth>1259){
        ansHeight = 350;
    }
    else if(winWidth>740){
        ansHeight = 300;
    }
    else if(winWidth>500){
        ansHeight = 350;
    }
    else{
        ansHeight = 450;
    }
    if(elementAnswer.classList.contains("collapsed")){
        elementAnswer.classList.remove("collapsed");
        $(".answer").animate({height:ansHeight},500);
    }
    else{
        elementAnswer.classList.add("collapsed");
       $(".answer").animate({height:"0"},500);
    }
}); 
window.addEventListener('resize',()=>{
    winWidth = window.innerWidth;
    ansHeight;
    if(winWidth>1259){
        ansHeight = 350;
    }
    else if(winWidth>740){
        ansHeight = 300;
    }
    else if(winWidth>500){
        ansHeight = 350;
    }
    else{
        ansHeight = 450;
    }
    if(elementAnswer.classList.contains("collapsed")){
        $(".answer").css("height",0);
    }
    else{
       
        $(".answer").css("height",ansHeight);
    }
  });