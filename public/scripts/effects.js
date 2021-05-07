const playBtn = document.getElementById("play");
const pauseBtn = document.getElementById("pause");
const chimes = document.getElementById("chimes");
playBtn.addEventListener("click", function() {
    chimes.play();
    playBtn.classList.add("hidden");
})
pauseBtn.addEventListener("click", function() {
    chimes.pause();
    playBtn.classList.remove("hidden");
})

$(document).ready(function () {
    let modal = $("#modal");
    $(".link").on("click", function (e) {
        $(modal).addClass("slide-up", 500, 'easeOutBounce');
        $(modal).removeClass('slide-down'); 
        let location = $(e.currentTarget).data("value");
    })
    $("#closeBtn").on("click", function(e) {
        $(modal).addClass("slide-down", 1000, 'easeOutBounce');
        $(modal).removeClass('slide-up'); 
    })
})