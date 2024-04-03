let max = 15;
let min = 5;
let guesses = [];
let passedMin = false;

let numberInput = document.getElementById("numberInput");
let guessButton = document.getElementById("guess");
let giveUpButton = document.getElementById("giveUp");

giveUpButton.addEventListener("click", () => {
    let msg = document.getElementById("msgLost");
    msg.textContent =
        "I remain the incognito master ! We shall settle this in a game of rock paper scissors instead.";
    let modal = document.getElementById("lost");
    modal.style.display = "";
});

guessButton.addEventListener("click", () => {
    //add the number to the array,check duplicate (for custom response)
    let n = numberInput.value;
    let duplicate = false;
    if (guesses.includes(n)) duplicate = true;
    guesses.push(n);

    //display guesses on screen( once near user and once at basile as 'wrong')
    let history = document.getElementById("history");
    let historybasile = document.getElementById("historyBasile");
    history.innerHTML = "Guessing history:<br><br>";
    historybasile.innerHTML = "Wrong guesses:<br><br>";
    guesses.forEach((element, index) => {
        history.innerHTML += "<i>" + element + "</i> ";
        historybasile.innerHTML +=
            "<s><i id='basileNumber'>" + element + "</i></s> ";
        if (index != 0 && (index + 1) % 5 == 0) {
            history.innerHTML += "<br><br>";
            historybasile.innerHTML += "<br><br>";
        }
    });

    //make basile respond differently depending on guessed age
    let msg = document.getElementById("persilChat");

    if (duplicate)
        msg.textContent = "Guessing the same over and over wont help you!";
    else if (n == 35)
        msg.textContent =
            "You think I would make the placeholder my actual age? " +
            n +
            " is not correct";
    else if (n < 18)
        msg.textContent = "You think I'm a child!? I am definitely not " + n + " years old";
    else if (n < 23)
        msg.textContent = "Not " + n + " years old, I'm eternally youthful";
    else if (n < 30) msg.textContent = "I'm flattered! But my age is not " + n;
    else if (n < 40) msg.textContent = "Alas, my age is not " + n;
    else if (n < 55) msg.textContent = "Nay, mine own age is not " + n;
    else
        msg.textContent =
            "*Persile looks worried at a mirror* NO MY AGE IS NOT " + n;

    if (guesses.length > max) {
        //end game after max guess
        giveUpButton.disabled = true;
        guessButton.disabled = true;

        let storeThis = document.getElementById("skill");
        storeThis.value = "Determined";
        msg = document.getElementById("msgLost");
        msg.innerHTML =
            "I grow weary of your persistence, a game of Rock Paper Scissors will decide this dispute.<br> You've unlocked bonus soft skill: Determined";
        let modal = document.getElementById("lost");
        modal.style.display = "";
    } else if (guesses.length >= min && !passedMin) {
        //enable surrender button after min guesses
        passedMin = true;
        giveUpButton.disabled = false;
        let modal = document.getElementById("won");
        modal.style.display = "";
        //hide the modal without reloading page
        let continueUpButton = document.getElementById("continue");
        continueUpButton.addEventListener("click", () => {
            modal.style.display = "none";
        });
    }
});
