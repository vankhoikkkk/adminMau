// Silder animation
const listImg = document.querySelectorAll(".container-slider img");
const containerSlide = document.querySelector(".container-slider");
const listDot = document.querySelectorAll(".dot");

console.log(listDot);

listImg.forEach(function(imga, index){
    imga.style.left = index * 100 +  "%";
    listDot[index].addEventListener("click", function() {
        animationSlider(index);
        indexc = index;
        resetInterval();
    })
})


let indexc = 0;
let indexSize = listImg.length;

function aotuSlide(){
    indexc++;
    if(indexc >= indexSize){
        indexc = 0;
    }
    animationSlider(indexc);
}


function animationSlider(index1){
    console.log(index1);
    containerSlide.style.left = "-" + index1 * 100 + "%";
    // containerSlide.style.right = index1 * 100 + "%";
    // lấy thẻ có class active xoá class active
    const varActive = document.querySelector(".active");
    varActive.classList.remove('active');
    // thêm class active vào thẻ có index1
    listDot[index1].classList.add("active");
}

// cứ 5s sẽ đổi slide
let idInterval;
idInterval = setInterval(aotuSlide, 5000);

// reset interval lại thời gian 5s
function resetInterval(){
    clearInterval(idInterval);
    idInterval = setInterval(aotuSlide, 5000);
}
