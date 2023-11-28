const openLoginButtons = document.querySelectorAll('.openLogin');
const loginForm = document.getElementById('login');
const closeLoginForm = document.getElementById('closeLogin');

const openSignupButtons = document.querySelectorAll('.openSignup');
const signupForm = document.getElementById('signup');
const closeSignupForm = document.getElementById('closeSignup');

const userOptionsBtn = document.getElementById('user');
const userOptions = document.getElementById('userOptions');

document.addEventListener('DOMContentLoaded', function () {
  // Your JavaScript code here
  // This code will execute once the DOM is fully loaded
userOptionsBtn.addEventListener('click',()=>{
      var hideClass = "hideForm";
      if(userOptions.classList.contains(hideClass)){
        userOptions.classList.remove('hideForm');
      }else{
        userOptions.classList.add('hideForm');
      }
});
});


openLoginButtons.forEach(button => {
  button.addEventListener('click', () => {
    loginForm.classList.remove('hideForm');
    loginForm.classList.add('displayForm');
    closeLoginForm.addEventListener('click',()=>{
        loginForm.classList.remove('displayForm');
        loginForm.classList.add('hideForm');
        signupForm.classList.remove('displayForm');
        signupForm.classList.add('hideForm');
    });
  });
});


openSignupButtons.forEach(button =>{
    button.addEventListener('click',()=>{
        loginForm.classList.remove('displayForm');
        loginForm.classList.add('hideForm');
        signupForm.classList.remove('hideForm');
        signupForm.classList.add('displayForm');
        closeSignupForm.addEventListener('click',()=>{
            signupForm.classList.remove('displayForm');
            signupForm.classList.add('hideForm');
            loginForm.classList.remove('displayForm');
            loginForm.classList.add('hideForm');
        });
    });
});
