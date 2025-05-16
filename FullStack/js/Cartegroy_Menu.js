//Cartegroy menu

const listLi = document.querySelectorAll(".list-item-menu__item > p");
const listUl = document.querySelectorAll(".list-chung");

listLi.forEach(function(li, index) {
    listLi[index].addEventListener("click", function() {
        listUl[index].classList.toggle("block");
    })
})