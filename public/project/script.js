const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const login1Btn = document.getElementById('pindah');


registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

document.getElementById("login").addEventListener("click", function () {
    container.classList.remove("active");
    window.open("https://github.com/Jikoyuo", '_blank');
    // your event handling code
    alert("Button Clicked!");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

login1Btn.addEventListener('click', () => {
    container.classList.remove("active");
});


