let text = document.querySelector('.text-balloon')

console.log(text.textContent)

var i = 0;
var txt = text.textContent; /* The text */
var speed = 8; /* The speed/duration of the effect in milliseconds */
text.textContent = "";

window.addEventListener('DOMContentLoaded', () => {
    text.style.opacity = 1;
    typeWriter();
})

function typeWriter() {
  if (i < txt.length) {
    text.innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}