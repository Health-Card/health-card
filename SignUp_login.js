const singupBtn = document.querySelector(".signupBtn");
const loginBtn = document.querySelector(".loginBtn");
const moveBtn= document.querySelector(".moveBtn");
const signup=document.querySelector(".signup");
const login=document.querySelector(".login");

loginBtn.addEventListener("click",()=>{
    moveBtn.classList.add("rightBtn");
    login.classList.add("loginForm");
    signup.classList.remove("singupForm");
    moveBtn.innerHTML="Login";
})

singupBtn.addEventListener("click",()=>{
    moveBtn.classList.remove("rightBtn");
    login.classList.remove("loginForm");
    signup.classList.add("singupForm");
    moveBtn.innerHTML="Signup";
})