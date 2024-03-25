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

var skip = document.getElementById("skip");
skip.addEventListener("click", () => {
    var finalWarning = document.getElementById("warning");
    finalWarning.style.display = "";
});
