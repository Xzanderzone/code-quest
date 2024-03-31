var offset = [0, 0];
var divOverlay = document.getElementById("won");
var isDown = false;
divOverlay.addEventListener(
    "mousedown",
    function (e) {
        isDown = true;
        offset = [
            divOverlay.offsetLeft - e.clientX,
            divOverlay.offsetTop - e.clientY,
        ];
    },
    true
);
document.addEventListener(
    "mouseup",
    function () {
        isDown = false;
    },
    true
);

document.addEventListener(
    "mousemove",
    function (e) {
        event.preventDefault();
        if (isDown) {
            divOverlay.style.left = e.clientX + offset[0] + "px";
            divOverlay.style.top = e.clientY + offset[1] + "px";
        }
    },
    true
);

//show warning when attempting to skip a game
var skip = document.getElementById("skip");
skip.addEventListener("click", () => {
    var finalWarning = document.getElementById("warning");
    finalWarning.style.display = "";
});

//avoid refresh on slider puzzle "continue"
var continueGame = document.getElementById("continueGame");
continueGame != null ??
    continueGame.addEventListener("click", () => {
        var finalWarning = document.getElementById("warning");
        finalWarning.style.display = "none";
    });

//help pop up explaining minigames?
var info = document.getElementById("infoBtn");
info != null ??
    info.addEventListener("click", () => {
        var infoModal = document.getElementById("info");
        if (infoModal.style.display == "none") infoModal.style.display = "";
        else infoModal.style.display = "none";
    });

//close help pop up extra button
var info = document.getElementById("return");
info != null ??
    info.addEventListener("click", () => {
        var infoModal = document.getElementById("info");
        infoModal.style.display = "none";
    });
