var title = document.getElementById('title');
var ms = document.getElementById('ms');

var submit = document.getElementById('submit');



submit.addEventListener("click",(x) => {
   check();
})

function check(){
    if(title.value == '' || ms.value == ''){
        alert('Empty Input');
    }else{
        alert('Succesfully Send');
    }
}