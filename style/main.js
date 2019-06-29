var aboutme = document.getElementById('about');
aboutme.onclick = function aboutus(){
  alert('Designed By Mahmoud');
};
//Validate The Input (FrontEnd)
/*
1-Inputs require
2-input > 5 & password > 8 & Email > 8
3-Not Empty
4- Input !< 11 & Password !< 22 & email !< 20
*/
var form = document.getElementById('formone');
var allFormInput = form.elements;
allFormInput[0].addEventListener("input",secureform)
function secureform(){
if(this.value == "" || this.value.indexOf("<") !== -1 || this.value.indexOf(">") !== -1 ||typeof(this.value) == null || typeof(this.value) == 'undefined'  || this.value.length <= 5 || this.value.length >= 20){
document.getElementById('error').innerHTML = '<h1>Error Username </h1>';
return false;
}
else if(this.value.search(/\s/g) > -1)
{
  document.getElementById('error').innerHTML = '<h1>Error whitespace </h1>';
return false;
}
else {
document.getElementById('error').innerHTML = '<h1 style=\"color:green\;\">Correct Username </h1>';
}
}
