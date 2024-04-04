let text = document.querySelector('.text-balloon:not(.landing .text-balloon)');

let i = 0;
let txt = text.innerHTML; /* The text */
let speed = 28; /* The speed/duration of the effect in milliseconds */
text.innerHTML = "";

window.addEventListener('DOMContentLoaded', () => {
    text.style.opacity = 1;
    typeWriter();
})

function typeWriter() {
    if (i < txt.length) {
        let char = txt.charAt(i);
        
        if (char === '<') {
            let endIndex = txt.indexOf('>', i);
            let tag = txt.substring(i, endIndex + 1);
            if (tag === "<br>") {
                text.innerHTML += "<br>";
            } else {
                text.innerHTML += tag;
            }
            i = endIndex + 1;
        } else {
            text.innerHTML += char;
            i++;
        }
        
        setTimeout(typeWriter, speed);
    }
}