/* LOGIN AND SIGNUP FORM */
const signupForm = document.querySelector(".signup form");
const loginForm = document.querySelector(".login form");

signupForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const user = document.getElementById("txt").value;
  const email = document.getElementById("emailDaftar").value;
  const password = document.getElementById("pswdDaftar").value;

  if (!validateUser(user)) {
    alert("User harus terdiri dari minimal 6 karakter (huruf)!");
    return;
  }

  if (!validateEmail(email)) {
    alert("Email tidak valid!");
    return;
  }

  if (!validatePassword(password)) {
    alert("Password minimal 8 karakter!");
    return;
  }
  alert("Daftar Berhasil!");
  
  window.location.href = "login.html";
});

loginForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const email = document.getElementById("emailLogin").value;
  const password = document.getElementById("pswdLogin").value;

  if (!validateEmail(email)) {
    alert("Email tidak valid!");
    return;
  }

  if (!validatePassword(password)) {
    alert("Password minimal 8 karakter!");
    return;
  }
  alert("Login Berhasil!");
  
  window.location.href = "index.html";
});


function validateUser(user) {
  return user.length >= 6 && /^[a-zA-Z]+$/.test(user) && isNaN(user);
}

function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function validatePassword(password) {
  return password.length >= 8;
}

/* LOGIN AND SIGNUP FORM */
