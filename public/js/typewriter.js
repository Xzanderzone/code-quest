let text = document.querySelector('.text-balloon:not(.landing .text-balloon)')

var i = 0;
var txt = text.innerHTML; /* The text */
var speed = 28; /* The speed/duration of the effect in milliseconds */
text.textContent = "";

window.addEventListener('DOMContentLoaded', () => {
    text.style.opacity = 1;
    typeWriter();
})

function typeWriter() {
  if (i < txt.length) {
    if (txt.charAt(i) === "<") {
      text.innerHTML += "<br>"
      i += 3
    } else {
      text.innerHTML += txt.charAt(i);
    }
    i++;
    setTimeout(typeWriter, speed);
  }
}