let wins = 0;
let losses = 0;
let ties = 0;
let total = 5;
let options = ["rock", "paper", "scissor"];
let randomOptionIndex = Math.floor(Math.random() * options.length);
let chatbox = document.getElementById("chatbox");
let choice = null;

let rockButton = document.getElementById("rock");
let paperButton = document.getElementById("paper");
let scissorButton = document.getElementById("scissor");
let confirmButton = document.getElementById("fight");
handleChoice = (e) => {
    if (choice) document.getElementById(choice).classList.remove("highlighted");
    choice = e.target.id;
    confirmButton.disabled = false;
    let playerSVG = document.getElementById("playerSVG");
    playerSVG.src = "/media/rock_paper_scissor/" + choice + ".svg";
    console.log(e.target);
    e.target.classList.add("highlighted");
};
handleConfirm = () => {
    if (options[randomOptionIndex] === choice) UpdateHistory("Tied", choice);
    else if (options[(randomOptionIndex + 1) % options.length] === choice)
        UpdateHistory("Won", choice);
    else UpdateHistory("Lost", choice);
};
rockButton.addEventListener("click", handleChoice);
paperButton.addEventListener("click", handleChoice);
scissorButton.addEventListener("click", handleChoice);
confirmButton.addEventListener("click", handleConfirm);

function UpdateHistory(outcome, e) {
    //update display for player and pc choises
    let persilSVG = document.getElementById("basileSVG");
    persilSVG.src =
        "/media/rock_paper_scissor/" + options[randomOptionIndex] + ".svg";
    if (outcome == "Won") {
        wins++;
        chatbox.style.color = "green";
        if (wins >= total / 2) EndGame(true);
    } else if (outcome == "Lost") {
        losses++;
        chatbox.style.color = "red";
        if (losses >= total / 2) EndGame(false);
    } else if (outcome == "Tied") {
        ties++;
        chatbox.style.color = "white";
    }

    chatbox.innerHTML =
        "You " +
        outcome +
        // "!<br>Your choise: " +
        // e +
        // "<br>Persil's choise: " +
        // options[randomOptionIndex] +
        "     <br><br>Wins: " +
        wins +
        " <br><br>Losses: " +
        losses +
        " <br><br>Ties: " +
        ties;
    //new random for persil
    randomOptionIndex = Math.floor(Math.random() * options.length);
}
function EndGame(win) {
    if (win) {
        let storeThis = document.getElementById("skill");
        storeThis.value = "JavaScript";
        let msg = document.getElementById("msgWin");
        msg.style.color = "white";
        msg.style.textAlign = "center";
        msg.innerHTML =
            "Thanks to the mighty Persil challange<br>you unlock some of your potential<br> Skill added: JavaScript";
        let modal = document.getElementById("won");
        modal.style.display = "";
    } else {
        let msg = document.getElementById("msgLost");
        msg.style.color = "white";
        msg.textContent = "The mighty Persil wins this time! Try again?";
        let modal = document.getElementById("lost");
        modal.style.display = "";
    }
}
