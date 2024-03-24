let wins = 0;
let losses = 0;
let ties = 0;
let total = 5;
let options = ["rock", "paper", "scissor"];
let randomOptionIndex = Math.floor(Math.random() * options.length);
let chatbox = document.getElementById("chatbox");

handleClick = (e) => {
    let element = e.target.id;
    if (options[randomOptionIndex] === element) UpdateHistory("Tied", element);
    else if (options[(randomOptionIndex + 1) % options.length] === element)
        UpdateHistory("Won", element);
    else UpdateHistory("Lost", element);
};

let rockButton = document.getElementById("rock");
let paperButton = document.getElementById("paper");
let scissorButton = document.getElementById("scissor");
rockButton.addEventListener("click", handleClick);
paperButton.addEventListener("click", handleClick);
scissorButton.addEventListener("click", handleClick);

function UpdateHistory(outcome, e) {
    //update display for player and pc choises
    let persilSVG=document.getElementById("basileSVG");
    persilSVG.src="/media/rock_paper_scissor/"+options[randomOptionIndex]+".svg";
    let playerSVG=document.getElementById("playerSVG");
    playerSVG.src="/media/rock_paper_scissor/"+e+".svg";
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
    //new random for persil
    randomOptionIndex = Math.floor(Math.random() * options.length);

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
        let msg = document.getElementById("msgLost");
        msg.style.color = "white";
        msg.textContent = "The mighty Persil wins this time! Try again?";
        let modal = document.getElementById("lost");
        modal.style.display = "";
    }
}
