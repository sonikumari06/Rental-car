const wraaper = document.querySelector(".wraaper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnLogin-popup");


registerLink.addEventListener('click',()=> {
    wraaper.classList.add('active');

});

loginLink.addEventListener('click',()=> {
    wraaper.classList.remove('active');

});
btnPopup.addEventListener('click',()=> {
    wraaper.classList.add('active-popup');

});


document.getElementById("loginBtn").addEventListener("click", function() {
    window.location.href = "AvilableCarRent"; 
});







