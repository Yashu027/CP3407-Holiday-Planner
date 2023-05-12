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