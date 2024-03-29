const gridContainer = document.querySelector(".grid-container");
let cards = [];
let firstCard, secondCard;
let matchedPair = [];
let lockBoard = false;
let score = 0;

document.querySelector(".score").textContent = score;

// switch(course) {
//   case fullstack:
//     fetch("/media/memory_cards/fullstack/fullstack.json")
//     .then((res) => res.json())
//     .then((data) => {
//       cards = [...data, ...data];
//       shuffleCards();
//       generateCards();
//     });
//     break;
//   case salesforce:
//     fetch("/media/memory_cards/salesforce/salesforce.json")
//     .then((res) => res.json())
//     .then((data) => {
//       cards = [...data, ...data];
//       shuffleCards();
//       generateCards();
//     });
//     break;
//   case java:
//     fetch("/media/memory_cards/java/java.json")
//     .then((res) => res.json())
//     .then((data) => {
//       cards = [...data, ...data];
//       shuffleCards();
//       generateCards();
//     });
// }

fetch("/media/memory_cards/java/java.json")
.then((res) => res.json())
.then((data) => {
  cards = [...data, ...data];
  shuffleCards();
  generateCards();
});


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
}

function checkForMatch() {
  let isMatch = firstCard.dataset.name === secondCard.dataset.name;

  if (isMatch) {
    if (!isPairMatched(firstCard.dataset.name, secondCard.dataset.name)) {
      addMatchedPair(firstCard.dataset.name, secondCard.dataset.name);
      console.log("Pair matched:", firstCard.dataset.name, secondCard.dataset.name);
    } else {
      console.log("Pair already matched!");
    }
    disableCards();
  } else {
    unflipCards();
  }

  console.log(matchedPair)
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
  return matchedPair.some(pair => pair.includes(firstCardName) && pair.includes(secondCardName));
}

function addMatchedPair(firstCardName, secondCardName) {
  matchedPair.push([firstCardName, secondCardName]);
}

let firstPair = matchedPair[0];
let fourthPair = matchedPair[3];
let eighthPair = matchedPair[7];

