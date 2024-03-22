let max = 15;
let min = 5;
let guesses = [];
let passedMin = false;

let numberInput = document.getElementById("numberInput");
let guessButton = document.getElementById("guess");
let giveUpButton = document.getElementById("giveUp");
giveUpButton.addEventListener("click", () => {
    let msg = document.getElementById("msgLost");
    msg.style.color = "white";
    msg.textContent =
        "I remain the incognito master ! We shall settle this in a game of rock paper scissors instead.";
    let modal = document.getElementById("lost");
    modal.style.display = "";
});
guessButton.addEventListener("click", () => {
    let n=numberInput.value;
    guesses.push(n);
    let msg=document.getElementById("persilChat");
    if(n<18)msg.textContent="You think im a child!? I am definitely not "+n;
    else if(n<28)msg.textContent="I'm flattered! but my age is not "+n;
    else if(n<38)msg.textContent="No,my age is not "+n;
    else if(n<55)msg.textContent="Nay, mine own age is not "+n;
    else msg.textContent="*Persile looks worried at a mirror* NO MY AGE IS NOT "+n;
    if (guesses.length > max) {
        let msg = document.getElementById("msgLink");
        msg.style.color = "white";
        msg.textContent = "Lets rock!";
        msg = document.getElementById("msgLost");
        msg.style.color = "white";
        msg.textContent =
            "I grow weary of your presistence, a game of rock paper scissors will decide your skill.";
        let modal = document.getElementById("lost");
        modal.style.display = "";
    } else if (guesses.length >= min && !passedMin) {
        passedMin = true;
        giveUpButton.classList.remove("disabled");
        let modal = document.getElementById("won");
        modal.style.display = "";
        let continueUpButton = document.getElementById("continue");
        continueUpButton.addEventListener("click", () => {
            console.log("display none the parent?");
            modal.style.display="none";
        })
    }
});
