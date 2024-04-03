// let offset = [0, 0];
// let divOverlay = document.getElementById("won");
// let isDown = false;
// divOverlay.addEventListener(
//     "mousedown",
//     function (e) {
//         isDown = true;
//         offset = [
//             divOverlay.offsetLeft - e.clientX,
//             divOverlay.offsetTop - e.clientY,
//         ];
//     },
//     true
// );
// document.addEventListener(
//     "mouseup",
//     function () {
//         isDown = false;
//     },
//     true
// );

// document.addEventListener(
//     "mousemove",
//     function (e) {
//         event.preventDefault();
//         if (isDown) {
//             divOverlay.style.left = e.clientX + offset[0] + "px";
//             divOverlay.style.top = e.clientY + offset[1] + "px";
//         }
//     },
//     true
// );

//actual skip button press
let skipBtn = document.getElementsByClassName("skipBtn");
for (let i = 0; i < skipBtn.length; i++) {
    skipBtn[i].addEventListener(
        "click",
        () => {
            location.href = "/next";
        },
        { once: true }
    );
}
//post request buttons use nextBtn
let nextBtn = document.getElementsByClassName("nextBtn");
for (let i = 0; i < nextBtn.length; i++) {
    nextBtn[i].addEventListener("click", function (event) {
        setTimeout(function () {
            event.target.disabled = true;
        }, 0);
    });
}
//show warning when attempting to skip a game
let skip = document.getElementById("skip");
if (skip)
    skip.addEventListener("click", () => {
        let finalWarning = document.getElementById("warning");
        finalWarning.style.display = "";
    });

//avoid refresh on slider puzzle "continue"
let continueGame = document.getElementById("continueGame");
if (continueGame)
    continueGame.addEventListener("click", () => {
        let finalWarning = document.getElementById("warning");
        finalWarning.style.display = "none";
    });

//help pop up explaining minigames?
let info = document.getElementById("infoBtn");
if (info)
    info.addEventListener("click", () => {
        let infoModal = document.getElementById("info");
        if (infoModal.style.display == "none") infoModal.style.display = "";
        else infoModal.style.display = "none";
    });

//close help pop up extra button
let reeturn = document.getElementById("return");
if (reeturn)
    reeturn.addEventListener("click", () => {
        let infoModal = document.getElementById("info");
        infoModal.style.display = "none";
    });
