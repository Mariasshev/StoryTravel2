function Change(x){
    x.classList.toggle("change");
}

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}
//Change icons
$(window).onmouseover(function () {
    $('.icon-instagram').addClass('icon-instagram-orange');
    $('.icon-telegram').addClass('icon-telegram-orange');

});

/*active nav-link*/
const langButtons = document.querySelectorAll("[data-btn]");
const allLangs = ["ua", "en"];
const currentPathName = window.location.pathname;
let currentLang =
    localStorage.getItem("language") ||  "ua";



// обработчики на каждую кнопку
langButtons.forEach((a) => {
    a.addEventListener("click", (event) => {
        if (!event.target.classList.contains("active")) {
            currentLang = event.target.dataset.btn;
            localStorage.setItem("language", event.target.dataset.btn);
            resetActiveClass(langButtons, "active");
            a.classList.add("active");
        }
    });
});

// Сброс активного класса у переданного массива элементов
function resetActiveClass(arr, activeClass) {
    arr.forEach((elem) => {
        elem.classList.remove("active");
    });
}

// Проверка активной кнопки
function checkActiveLangButton() {
    switch (currentLang) {
        case "ua":
            document
                .querySelector('[data-btn="ua"]')
                .classList.add("active");
            break;
        case "en":
            document
                .querySelector('[data-btn="en"]')
                .classList.add("active");
            break;

        default:
            document
                .querySelector('[data-btn="ua"]')
                .classList.add("active");
            break;
    }
}
checkActiveLangButton();
