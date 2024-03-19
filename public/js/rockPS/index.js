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
    else if (
        randomOptionIndex > 0 &&
        options[randomOptionIndex - 1] === element
    )
        UpdateHistory("Lost", element);
    else if (options[options.length - 1] === element)
        UpdateHistory("Lost", element);
    randomOptionIndex = Math.floor(Math.random() * options.length);
};

let rockButton = document.getElementById("rock");
rockButton.addEventListener("click", handleClick);
let paperButton = document.getElementById("paper");
paperButton.addEventListener("click", handleClick);
let scissorButton = document.getElementById("scissor");
scissorButton.addEventListener("click", handleClick);

function UpdateHistory(outcome, e) {
    console.log(outcome, e);
    if (outcome == "Won") {
        wins++;
        chatbox.style.color = "green";
        if (wins >= int(total / 2 + 1)) EndGame(true);
    } else if (outcome == "Lost") {
        losses++;
        chatbox.style.color = "red";
        if (losses >= int(total / 2 + 1)) EndGame(false);
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
        alert("you've beaten the mighty Persil!");
    } else {
        //allow player to keep going in new "best off"
        total += 5;
        alert(
            "you've lost! Make it best out of " +
                total +
                "?[or try again from 0?]"
        );
    }
}
