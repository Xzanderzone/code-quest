let max = 15;
let min = 5;
let guesses = [];
let passedMin = false;

let numberInput = document.getElementById("numberInput");
let guessButton = document.getElementById("guess");
let giveUpButton = document.getElementById("giveUp");
giveUpButton.addEventListener("click", () => {
    alert(
        "I remain the incognito master ! We shall settle this in a game of rock paper scissors instead."
    );
});
guessButton.addEventListener("click", () => {
    guesses.push(numberInput.value);
    console.log(guesses);
    if (guesses.length >= max)
        alert(
            "i grow weary of your presistence, a game of rock paper scissors will decide"
        );
    else if (guesses.length > min && !passedMin) {
        passedMin = true;
        giveUpButton.classList.remove("disabled");
        alert("Surrender now! You will never find my age.");
    }
});
