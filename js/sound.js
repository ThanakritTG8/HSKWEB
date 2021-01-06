// sound
var s = document.getElementById("sound");
var list = ["tg", "tg1", "tg2"];
var text = ["tg", "tg1", "tg2"];

function playAudio() {
    s.playbackRate = 1;
    s.play();
}

function pauseAudio() {
    // s.playbackRate = 1;
    s.pause();
}

function slowAudio() {
    s.playbackRate = 0.5;
    s.play();
}

$("#listgroup").empty();
$(document).ready(function () {
    list.forEach(txt => {

        var btn = `<button type="button" class="list-group-item list-group-item-action" 
        aria-current="true" id="listbtn_lesson">${txt}
        </button>`;

        $("#listgroup").append(btn);
    });

});