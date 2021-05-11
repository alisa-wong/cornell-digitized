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
        console.log("modal open");
        $(modal).addClass("slide-up", 300, 'easeOutBounce');
        $(modal).removeClass('slide-down'); 
        let location = $(e.currentTarget).data("value");
        console.log(location);
        let locationModal = $("#" + location + "-modal");
        $(locationModal).removeClass("hidden");
        $(".modal-title").css("position", "fixed");
        setTimeout( function() {
            $(locationModal).fadeTo('slow', 1)
        }, 1500);
    })
    $("#closeBtn").on("click", function(e) {
        console.log("modal close");
        console.log(e);
        $(".modal-title").css("position", "absolute");
        $(modal).addClass("slide-down", 500, 'easeOutBounce');
        $(modal).removeClass('slide-up'); 
        setTimeout( function() {
            $(modal).find(".location-content").addClass("hidden").css("opacity", 0);
        }, 500);
    })
})

function toggleAbout() {
    let aboutModal = document.getElementById("about-modal-container");
    // let aboutModal = $("#about-modal-container");
    console.log((aboutModal).classList);
    if (aboutModal.classList.contains("hidden")) {
        aboutModal.classList.remove("hidden");
    } else  {
        aboutModal.classList.add("hidden");
    }
}