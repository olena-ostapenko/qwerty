let burgerMenu = document.querySelector(".header-navigation");

let btnOpenBurger = document.querySelector(".burger-menu");
let isBurgerOpened = false;

btnOpenBurger.addEventListener("click", function(event){
    event.preventDefault();
    if(isBurgerOpened) {
        closeFullScreenBurder();
    } else {
        openFullScreenBurger();
    }
});

let menuAnchors = document.querySelectorAll(".header-menu a");
for(let i = 0; i < menuAnchors.length; i++) {
    menuAnchors[i].addEventListener("click", function(e){
        closeFullScreenBurder();
    });
}
window.addEventListener("resize", function(event){
    checkBurgerMenu();
});
checkBurgerMenu();

function openFullScreenBurger() {
    burgerMenu.classList.remove("hidden");

    btnOpenBurger.querySelector(".icon-open").classList.add("hidden");
    btnOpenBurger.querySelector(".icon-close").classList.remove("hidden");
    isBurgerOpened = true;
}
function closeFullScreenBurder() {
    burgerMenu.classList.add("hidden");

    btnOpenBurger.querySelector(".icon-open").classList.remove("hidden");
    btnOpenBurger.querySelector(".icon-close").classList.add("hidden");
    isBurgerOpened = false;
}

function checkBurgerMenu() {
    if(window.innerWidth <= 991) {
        burgerMenu.classList.add("hidden");
    } else {
        burgerMenu.classList.remove("hidden");
    }
}