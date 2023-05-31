let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
};

window.onscroll = () => {
    menu.classList.remove("fa-times");
    navbar.classList.remove("active");
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

// Packages loadmore button start

let loadMoreBtn = document.querySelector('.packages .loadmore .btn');
let currentItem = 3;

if(loadMoreBtn){
    loadMoreBtn.onclick = () =>{
        let boxes = [...document.querySelectorAll('.packages .box-container .box')];
        for (let i = currentItem; i < currentItem + 3; i++){
            if(boxes[i]){
                boxes[i].style.display = 'inline-block';
            }
        };
        currentItem += 3;
        if(currentItem >= boxes.length){
            loadMoreBtn.style.display = 'none';
        }
    }
} else {
    console.log("Could not find loadMoreBtn");
}

// Packages loadmore button end

// store loadmore button start

let loadMoreBtnStore = document.querySelector('.store .loadmore .btn');
let currentItemStore = 5;

if(loadMoreBtnStore){
    loadMoreBtnStore.onclick = () =>{
        let boxes = [...document.querySelectorAll('.store .box-container .box')];
        for (let i = currentItemStore; i < currentItemStore + 5; i++){
            if(boxes[i]){
                boxes[i].style.display = 'inline-block';
            }
        };
        currentItemStore += 5;
        if(currentItemStore >= boxes.length){
            loadMoreBtnStore.style.display = 'none';
        }
    }
} else {
    console.log("Could not find loadMoreBtnStore");
}

// store loadmore button end

// Attractions loadmore button start

let loadMoreBtnAttraction = document.querySelector('.attraction .loadmore .btn');
let currentItemAttraction = 4;

if(loadMoreBtnAttraction){
    loadMoreBtnAttraction.onclick = () =>{
        let boxes = [...document.querySelectorAll('.attraction .box-container .box')];
        for (let i = currentItemAttraction; i < currentItemAttraction + 4; i++){
            if(boxes[i]){
                boxes[i].style.display = 'inline-block';
            }
        };
        currentItemAttraction += 4;
        if(currentItemAttraction >= boxes.length){
            loadMoreBtnAttraction.style.display = 'none';
        }
    }
} else {
    console.log("Could not find loadMoreBtnAttraction");
}

// Attractions loadmore button end

// Birthday sign up start

function name_validate(name) {
	if (name.length == 1){
		alert("Invalid Name. Please enter a Name that has more than one letter.");
return true;
	}
	else {return false;}
}

function email_validate(email) {
    if (email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
    return false;
    else {
    alert("Invalid Email address. Please enter a valid Email address.");
    return true;}
    }

function birthday_validate() {
    var month = document.getElementById("birth_month").value;
    var day = document.getElementById("birth_day").value;
    if (month == 2 & day > 29) {
        alert("Invalid. Please enter a valid date of birth");
        return true;}
    if (month == 4 & day > 30) {
    alert("Invalid. Please enter a valid date of birth");
    return true;}
    if (month == 6 & day > 30) {
    alert("Invalid. Please enter a valid date of birth");
    return true;}
    if (month == 9 & day > 30) {
    alert("Invalid. Please enter a valid date of birth");
    return true;}
    if (month == 11 & day > 30) {
    alert("Ivalid. Please enter a valid date of birth");
    return true;}
    if (month == 0 || day == 0) {
            alert("Invalid. Please enter a valid date of birth");
            return true;}
else {return false;}
}

function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    if (name_validate(name) || email_validate(email) || birthday_validate()){
        return false; }
    else {return true;}
}

function validateForm() {
    var inputs = document.getElementsByClassName('book-form')[0].getElementsByTagName('input');
    for(var i = 0; i < inputs.length; i++) {
        if(inputs[i].value === '') {
            alert('Please fill all fields before submitting');
            return false;
        }
    }
    alert('Thanks for booking, our booking assossiates will contact you');
    return true;
}

// Birthday sign up end

// Login and register start

document.getElementById('login-link').addEventListener('click', function() {
    document.getElementById('auth-modal').style.display = 'block';
});

document.getElementById('login-tab').addEventListener('click', function() {
    document.getElementById('login-form').style.display = 'block';
    document.getElementById('register-form').style.display = 'none';
});

document.getElementById('register-tab').addEventListener('click', function() {
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'block';
});

const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');
const logoutLink = document.getElementById('logout-link');
const loginLinkContainer = document.getElementById('login-link-container');
const usernameElement = document.getElementById('username');
const homeSection = document.getElementById('home-section');

let users = JSON.parse(localStorage.getItem('users')) || {};

document.getElementById('login-link').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('auth-modal').style.display = 'block';
});

loginForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const username = document.getElementById('login-username').value;
    const password = document.getElementById('login-password').value;

    if (users[username] && users[username].password === password) {
        localStorage.setItem('loggedInUser', username);
        usernameElement.textContent = username;
        document.getElementById('auth-modal').style.display = 'none';
        loginLinkContainer.style.display = 'none';
        document.getElementById('welcome-user').style.display = 'inline';
        logoutLink.style.display = 'inline';
        homeSection.style.display = 'block';
    } else {
        alert('Incorrect username or password');
    }
});

registerForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const fullname = document.getElementById('register-fullname').value;
    const username = document.getElementById('register-username').value;
    const password = document.getElementById('register-password').value;
    const contact = document.getElementById('register-contact').value;

    users[username] = { password: password, fullname: fullname, contact: contact };

    alert(`Registered successfully. Welcome, ${username}! Please log in.`);
    document.getElementById('login-tab').click(); 
});

logoutLink.addEventListener('click', function (event) {
    event.preventDefault();
    localStorage.removeItem('loggedInUser');
    usernameElement.textContent = '';
    loginLinkContainer.style.display = 'inline';
    document.getElementById('welcome-user').style.display = 'none';
    logoutLink.style.display = 'none';
    homeSection.style.display = 'none';
});

document.getElementById('login-tab').addEventListener('click', function (event) {
    event.preventDefault();
    this.classList.add('active');
    document.getElementById('register-tab').classList.remove('active');
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
});

document.getElementById('register-tab').addEventListener('click', function (event) {
    event.preventDefault();
    this.classList.add('active');
    document.getElementById('login-tab').classList.remove('active');
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
});

document.addEventListener('DOMContentLoaded', function() {
    const loggedInUser = localStorage.getItem('loggedInUser');
    if (loggedInUser) {
        usernameElement.textContent = loggedInUser;
        loginLinkContainer.style.display = 'none';
        document.getElementById('welcome-user').style.display = 'inline';
        logoutLink.style.display = 'inline';
        homeSection.style.display = 'block';
    }
});

// login register end