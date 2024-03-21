let wins = 0;
let losses = 0;
let ties = 0;
let total = 5;
let options = ["rock", "paper", "scissor"];

let randomOptionIndex = Math.floor(Math.random() * options.length);

let chatbox = document.getElementById("chatbox");
handleClick = (e) => {
    let element = e.target.id;
    console.log("clicked", element, randomOptionIndex, options);
    if (options[randomOptionIndex] === element) UpdateHistory("Tied", element);
    else if (options[(randomOptionIndex + 1) % options.length] === element)
        UpdateHistory("Won", element);
    else UpdateHistory("Lost", element);
    randomOptionIndex = Math.floor(Math.random() * options.length);
};

let rockButton = document.getElementById("rock");
rockButton.addEventListener("click", handleClick);
let paperButton = document.getElementById("paper");
paperButton.addEventListener("click", handleClick);
let scissorButton = document.getElementById("scissor");
scissorButton.addEventListener("click", handleClick);

function UpdateHistory(outcome, e) {
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
        "!<br>Your choise: " +
        e +
        "<br>Persil's choise: " +
        options[randomOptionIndex] +
        "     <br>Score: Wins " +
        wins +
        " Losses " +
        losses +
        " Ties: " +
        ties;
}
function EndGame(win) {
    if (win) {
        //change scene to victory screen
        let msg = document.getElementById("msgWin");
        msg.style.color = "white";
        msg.textContent = "You've beaten the mighty Persil!";
        let modal = document.getElementById("won");
        modal.style.display = "";
    } else {
        //allow player to keep going in new "best off"
        // total += 5;
        // alert(
        //     "you've lost! Make it best out of " +
        //         total +
        //         "?[or try again from 0?]"
        // );

        let msg = document.getElementById("msgLost");
        msg.style.color = "white";
        msg.textContent = "The mighty Persil wins this time! Try again?";
        let modal = document.getElementById("lost");
        modal.style.display = "";
    }
}
