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
    // console.log($("#modal.slide-down"));
    // if ($("#modal.slide-down").length != 0) {
    //     console.log("sliding up");
    //     $(modal).removeClass('slide-down'); 
    //     $(modal).addClass("slide-up", 1000, 'easeOutBounce');
    // } else if ($("#modal.slide-up").length != 0) {
    //     console.log("sliding down");
    //     $(modal).addClass("slide-down", 1000, 'easeOutBounce');
    //     $(modal).removeClass('slide-up'); 
    // }

    $(".link").on("click", function (e) {
        console.log("modal open");
        $(modal).addClass("slide-up", 500, 'easeOutBounce');
        $(modal).removeClass('slide-down'); 
        let location = $(e.currentTarget).data("value");
        console.log(location);
        let locationModal = $("#" + location + "-modal");
        $(locationModal).removeClass("hidden");
        setTimeout( function() {
            $(locationModal).fadeTo('slow', 1)
            $("#map-container").addClass("hidden");
        }, 1500);
    })
    $("#closeBtn").on("click", function(e) {
        console.log("modal close");
        $("#map-container").removeClass("hidden");
        $(modal).addClass("slide-down", 1000, 'easeOutBounce');
        $(modal).removeClass('slide-up'); 
        let location = $(modal).find(".location-content").data("value");
        let locationModal = $("#" + location + "-modal");
        console.log(location);
        $(locationModal).addClass("hidden");
        $(locationModal).css("opacity", 0);
    })
})