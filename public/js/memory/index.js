const gridContainer = document.querySelector(".grid-container");
let cards = [];
let firstCard, secondCard;
let matchedPair = [];
let lockBoard = false;
let score = 0;

document.querySelector(".score").textContent = score;

let course = document.currentScript.getAttribute("track");
console.log(course);

switch (course) {
    case "Full-Stack":
        fetch("/media/memory_cards/fullstack/fullstack.json")
            .then((res) => res.json())
            .then((data) => {
                cards = [...data, ...data];
                shuffleCards();
                generateCards();
            });
        break;
    case "Salesforce":
        fetch("/media/memory_cards/salesforce/salesforce.json")
            .then((res) => res.json())
            .then((data) => {
                cards = [...data, ...data];
                shuffleCards();
                generateCards();
            });
        break;
    case "Java":
        fetch("/media/memory_cards/java/java.json")
            .then((res) => res.json())
            .then((data) => {
                cards = [...data, ...data];
                shuffleCards();
                generateCards();
            });
}

function shuffleCards() {
    let currentIndex = cards.length,
        randomIndex,
        temporaryValue;
    while (currentIndex !== 0) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = cards[currentIndex];
        cards[currentIndex] = cards[randomIndex];
        cards[randomIndex] = temporaryValue;
    }
}

function generateCards() {
    for (let card of cards) {
        const cardElement = document.createElement("div");
        cardElement.classList.add("card");
        cardElement.setAttribute("data-name", card.name);
        cardElement.innerHTML = `
      <div class="front">
        <img class="front-image" src=${card.image} />
      </div>
      <div class="back"></div>
    `;
        gridContainer.appendChild(cardElement);
        cardElement.addEventListener("click", flipCard);
    }
}

function flipCard() {
    if (lockBoard) return;
    if (this === firstCard) return;

    this.classList.add("flipped");

    if (!firstCard) {
        firstCard = this;
        return;
    }

    secondCard = this;
    score++;
    document.querySelector(".score").textContent = score;
    lockBoard = true;

    checkForMatch();
    checkGameSkip();
}

function checkForMatch() {
    let isMatch = firstCard.dataset.name === secondCard.dataset.name;

    if (isMatch) {
        if (!isPairMatched(firstCard.dataset.name, secondCard.dataset.name)) {
            addMatchedPair(firstCard.dataset.name, secondCard.dataset.name);
            console.log(
                "Pair matched:",
                firstCard.dataset.name,
                secondCard.dataset.name
            );
        } else {
            console.log("Pair already matched!");
        }
        disableCards();
    } else {
        unflipCards();
    }
    console.log(matchedPair);
    checkGameEnd();
}

function disableCards() {
    firstCard.removeEventListener("click", flipCard);
    secondCard.removeEventListener("click", flipCard);

    resetBoard();
}

function unflipCards() {
    setTimeout(() => {
        firstCard.classList.remove("flipped");
        secondCard.classList.remove("flipped");
        resetBoard();
    }, 1000);
}

function resetBoard() {
    firstCard = null;
    secondCard = null;
    lockBoard = false;
}

function restart() {
    resetBoard();
    shuffleCards();
    score = 0;
    document.querySelector(".score").textContent = score;
    gridContainer.innerHTML = "";
    generateCards();
}

function isPairMatched(firstCardName, secondCardName) {
    return matchedPair.some(
        (pair) => pair.includes(firstCardName) && pair.includes(secondCardName)
    );
}

function addMatchedPair(firstCardName, secondCardName) {
    matchedPair.push([firstCardName, secondCardName]);
}

function checkGameEnd() {
    if (matchedPair.length === cards.length / 2) {
        console.log("win");
        setTimeout(gameEnd, 1000);
    } else {
        return false;
    }
}

function checkGameSkip() {
    if (score === 8) {
        console.log("skip!");
        setTimeout(gameSkip, 1000);
    } else {
        return false;
    }
}

function gameEnd() {
    let modelWon = document.getElementById("won");
    modelWon.style.display = "";
    let skillsText = document.getElementById("msgWin");
    skillsText.innerHTML =
        "You unlocked these skills<br>" +
        "- " +
        matchedPair[0][0].toUpperCase() +
        "<br> - " +
        matchedPair[3][0].toUpperCase() +
        "<br> - " +
        matchedPair[7][0].toUpperCase();
    let storeFirstPair = document.getElementById("skill");
    let storeFourthPair = document.getElementById("skill2");
    let storeEightPair = document.getElementById("skill3");
    storeFirstPair.value = matchedPair[0][0];
    storeFourthPair.value = matchedPair[3][0];
    storeEightPair.value = matchedPair[7][0];
}

function gameSkip() {
    let modelSkip = document.getElementById("warning");
    modelSkip.style.display = "block";
}
