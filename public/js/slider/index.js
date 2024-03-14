let size = 4;
let numberOfTiles = size ** 2;
let highlighted = numberOfTiles;
let shuffled = false;
let totalMoves = 0;
let inverted = false;

let PuzzleContainer = document.getElementById("puzzle");
let invertButton = document.getElementById("invert");
invertButton.addEventListener("click", () => {
    inverted = !inverted;
});
// Keyboard controls
const RIGHT_ARROW = 39;
const LEFT_ARROW = 37;
const UP_ARROW = 40;
const DOWN_ARROW = 38;
window.onkeydown = function (event) {
    if (!inverted) {
        if (event.keyCode === RIGHT_ARROW) {
            swap(highlighted + 1);
        } else if (event.keyCode === LEFT_ARROW) {
            swap(highlighted - 1);
        } else if (event.keyCode === UP_ARROW) {
            swap(highlighted + size);
        } else if (event.keyCode === DOWN_ARROW) {
            swap(highlighted - size);
        }
    } else {
        if (event.keyCode === RIGHT_ARROW) {
            swap(highlighted - 1);
        } else if (event.keyCode === LEFT_ARROW) {
            swap(highlighted + 1);
        } else if (event.keyCode === UP_ARROW) {
            swap(highlighted - size);
        } else if (event.keyCode === DOWN_ARROW) {
            swap(highlighted + size);
        }
    }
};

newGame();

function newGame() {
    // loadTiles("laravel");
    // loadTiles("salesforce");
    loadTiles("java");
    setTimeout(() => {
        shuffle();
    }, 500);
}

// Create buttons
function loadTiles(name) {
    for (let x = 0; x < size; x++) {
        for (let y = 0; y < size; y++) {
            var newTile = document.createElement("img");
            let id = x * size + y + 1;
            newTile.id = id;
            newTile.setAttribute("index", id);
            // if (x != size - 1 || y != size - 1)
            newTile.src = `./media/slider/${name}/${id}.png`;
            newTile.className = "tile";
            newTile.name = id;
            newTile.addEventListener("click", function () {
                swap(parseInt(this.getAttribute("index")));
            });
            PuzzleContainer.append(newTile);
        }
    }
    selectedTile = document.getElementById(highlighted);
    selectedTile.classList.add("selected");
}

function shuffle() {
    let minShuffles = 200;
    let totalShuffles =
        minShuffles + Math.floor(Math.random() * (200 - 100) + 100);
    for (let i = 0; i <= totalShuffles; i++) {
        setTimeout(function timer() {
            let x = Math.floor(Math.random() * 4);
            let direction = 0;
            if (x == 0) {
                direction = highlighted + 1;
            } else if (x == 1) {
                direction = highlighted - 1;
            } else if (x == 2) {
                direction = highlighted + size;
            } else if (x == 3) {
                direction = highlighted - size;
            }
            swap(direction);
            if (i >= totalShuffles - 1) {
                shuffled = true;
            }
        }, i * 8);
    }
}

// Swap tiles
function swap(clicked) {
    if (clicked < 1 || clicked > numberOfTiles) {
        return;
    }
    //add new move (remove if false move)
    totalMoves++;
    //swap right
    if (clicked == highlighted + 1) {
        if (clicked % size != 1) {
            setSelected(clicked);
        }
        //left
    } else if (clicked == highlighted - 1) {
        if (clicked % size != 0) {
            setSelected(clicked);
        }
        //up
    } else if (clicked == highlighted + size) {
        setSelected(clicked);
        //down
    } else if (clicked == highlighted - size) {
        setSelected(clicked);
    } else totalMoves--;

    if (shuffled) {
        console.log(totalMoves);
        if (checkHasWon()) {
            setTimeout(alert("Winner! used: " + totalMoves + " moves"), 1000);
        }
    } else totalMoves = 0;
}

function checkHasWon() {
    for (let b = 1; b <= numberOfTiles; b++) {
        currentTile = document.getElementById(`${b}`);
        currentTileIndex = currentTile.getAttribute("index");
        currentTileValue = currentTile.name;
        if (parseInt(currentTileIndex) != parseInt(currentTileValue)) {
            return false;
        }
    }
    return true;
}

function setSelected(index) {
    let currentTile = document.getElementById(`${highlighted}`);
    currentTile.classList.remove("selected");
    let newTile = document.getElementById(`${index}`);
    let holder = currentTile.src;
    currentTile.src = newTile.src;
    newTile.src = holder;
    holder = currentTile.name;
    currentTile.name = newTile.name;
    newTile.name = holder;
    newTile.classList.add("selected");
    highlighted = index;
}
