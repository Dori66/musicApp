


//  username = document.getElementById("username");
//  password = document.getElementById("password");

 usernameInput = document.getElementById("usernameInput");
 passwordInput = document.getElementById("passwordInput");

 errorUsername = document.getElementById("error-username");
 errorPassword = document.getElementById("error-pw");



 loginbtn = document.getElementsByClassName("login-btn")[0];

// console.log(usernameInput);

loginbtn.addEventListener("click",(x) => {
    validation();
})

function validation(){
    let username = this.usernameInput.value;
    let password = this.passwordInput.value;

    console.log(username, password);

   if(username == ''){
    this.errorUsername.innerText = 'Username is required'
   }if(password == ''){
    this.errorPassword.innerText = 'Password is required'
   }else {
    alert('logged In Successfully')
    this.errorPassword.innerText = ''
    this.errorUsername.innerText = '' 
    this.usernameInput.value = ''
    this.passwordInput.value = ''
   }     
}