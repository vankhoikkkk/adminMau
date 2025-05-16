// -----------------------IMG--------------------------------------------------
const img_main = document.querySelector(".body__img-main > img");
const img_list = document.querySelectorAll(".img-list-small > img");

img_list.forEach(function(img, index) {
    img.addEventListener("click", function() {
        img_main.src = img.src;
    })
})

// -----------------------IMG small--------------------------------------------------
const imgListSmall = document.querySelectorAll(".img-list-small img");
const arrowList = document.querySelectorAll(".img-list--icon-arrow");

let Location = 0;
    imgListSmall.forEach(function(itemIMG, index) {
        itemIMG.style.top = Location + "%";
        itemIMG.style.position = "absolute";
        Location += 25;
    })

let checkUp = -1;
let checkDown = parseInt(imgListSmall[7].style.top);
let indexIMG = 1; 

arrowList[0].addEventListener("click", function() {
    if(checkUp <= -1) {
        imgListSmall.forEach(function(it, index) {
            let valueUp = it.style.top;
            // console.log(index +" =" +valueUp);
            valueUp = parseInt(valueUp);
            it.style.top = valueUp + 25 + "%";
            if(index === 0) {
                checkUp = valueUp + 25;
            }
        })
        checkDown = checkDown + 25;
        console.log("Vòng của lên");
        console.log("checkUp :" + checkUp);
        console.log("checkDown :" + checkDown);
    }
})

arrowList[1].addEventListener("click", function() {
    if(checkDown > 75) {
        imgListSmall.forEach(function(it, index) {
            let valueUp = it.style.top;
            // console.log(index +"="+ valueUp);
            valueUp = parseInt(valueUp);
            it.style.top = valueUp - 25 + "%";
            if(index === 7) {
                checkDown = valueUp - 25;
            }
        })
        checkUp = checkUp -25;
        console.log("Vòng của xuống");
        console.log("checkDown :" + checkDown);
        console.log("checkUp :" + checkUp);
    }
})

// const imgListSmall = document.querySelectorAll(".img-list-small img");
// const arrows = document.querySelectorAll(".img-list--icon-arrow");

// if (imgListSmall.length === 0) {
//     console.error("Không tìm thấy img-list-small img!");
// } else {
//     console.log("Số lượng ảnh:", imgListSmall.length);
// }

// if (arrows.length < 2) {
//     console.error("Không đủ nút điều hướng! Cần ít nhất 2.");
// } else {
//     const up = arrows[0];
//     const down = arrows[1];

    // let location = 0;
    // imgListSmall.forEach((itemIMG, index) => {
    //     itemIMG.style.position = "absolute"; // Đảm bảo top có tác dụng
    //     itemIMG.style.top = location + "%";
    //     console.log(`Ảnh ${index} top: ${location}%`);
    //     location += 25;
    // });
// }



// -----------------------quantity--------------------------------------------------
const decrease = document.querySelector(".decrease");
const increase = document.querySelector(".increase");
const input = document.querySelector(".input");

if(decrease) {
    decrease.addEventListener("click", function() {
        if(input.value > 1) {
            input.value = parseInt(input.value) - 1;
        }
    })
}

if(increase) {
    increase.addEventListener("click", function() {
        input.value = parseInt(input.value) + 1;
    })
}

// -----------------------menu __ details_--------------------------------------------------
const introduce = document.querySelector(".introduce");
const introduce_show = document.querySelector(".introduce-show");
const detail_product = document.querySelector(".details-product");
const detail_product_show = document.querySelector(".details-product-show");
const perserve = document.querySelector(".preserve");
const perserve_show = document.querySelector(".preserve-show");
const inline_arrow = document.querySelector(".content-inline-arrow");
const list_menu_detail = document.querySelectorAll(".menu-details");
const list_menu = document.querySelectorAll(".menu-item");


if(introduce){
    introduce.addEventListener("click", function(){
        introduce_show.style.display = "block";
        detail_product_show.style.display = "none";
        perserve_show.style.display = "none";
        list_menu_detail.forEach(function(li, index) {
            li.classList.remove("show-more");
        })
    })
}

if(detail_product){
    detail_product.addEventListener("click", function(){
        introduce_show.style.display = "none";
        detail_product_show.style.display = "block";
        perserve_show.style.display = "none";
        list_menu_detail.forEach(function(li, index) {
            li.classList.remove("show-more");
        })
    })
}

if(perserve){
    perserve.addEventListener("click", function() {
        perserve_show.style.display = "block";
        introduce_show.style.display = "none";
        detail_product_show.style.display = "none";
        list_menu_detail.forEach(function(li, index) {
            li.classList.remove("show-more");
        })
    })
}

// show---more
list_menu.forEach(function(li, index) {
    inline_arrow.addEventListener("click", function() {
        list_menu_detail[index].classList.toggle("show-more");
        inline_arrow.classList.toggle("rotate");
    })
})


