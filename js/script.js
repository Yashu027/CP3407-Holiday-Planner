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
    
