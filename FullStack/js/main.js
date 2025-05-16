// header animation
const head = document.querySelector(".head");

//cách 1 bắt tại điểm bắt đầu scroll
// window.addEventListener("scroll", function() {
//     x = this.window.scrollY
//     if(x != 0){
//         head.classList.add("sticky");
//     } else {
//         head.classList.remove("sticky");
//     } 
// })

//cách 2 bắt tại thời điểm dừng scroll
window.addEventListener("scroll", function() {
    head.classList.add("sticky");
    setTimeout(function() {
        head.classList.remove("sticky");
    },500);
});



