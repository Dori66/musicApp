

names = document.getElementById('name');
age = document.getElementById('age')
username = document.getElementById("usernames");
password = document.getElementById("pw");


 errorAge = document.getElementById('error-age')
 errorName = document.getElementById('error-name')
 errorUsername = document.getElementById("error-username");
 errorPassword = document.getElementById("error-pw");
 errorName = document.getElementById('error-name')
 errorAge = document.getElementById('error-age')



 registerbtn = document.getElementsByClassName("button")[0];


registerbtn?.addEventListener("click",(x) => {
    validation();
},false)

function validation(){
    let name = this.names.value;
    let age = this.age.value;
    let username = this.username.value;
    let password = this.password.value;

   if(username == ''){
    this.errorUsername.innerText = 'Username is required'
   }if(password == ''){
    this.errorPassword.innerText = 'Password is required'
   }if(name == ''){
    this.errorName.innerText = 'Name is required'
   }
   if(age == ''){
    this.errorAge.innerText = 'Age is required'
   }    
   else {
    this.errorPassword.innerText = ''
    this.errorUsername.innerText = '' 
    this.errorAge.innerText = ''
    this.errorName.innerText = ''
    this.names.value = ''
    this.age.value = ''
    this.username.value = ''
    this.password.value = ''
   }     
}