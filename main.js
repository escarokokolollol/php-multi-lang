

document.querySelector("#select-lang").onchange = function(){
  let strArray = window.location.href.split("?");
  console.log(window.location = strArray[0] +  "?lang=" + this.value)
  
}