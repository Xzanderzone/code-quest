let codes = [
    ['black', 'yellow', 'yellow', 'red'],
    ['blue', 'blue', 'white', 'red'], 
    ['white', 'black', 'white', 'black'], 
    ['green', 'yellow', 'red', 'yellow'], 
    ['blue', 'black', 'blue', 'blue'], 
    ['green', 'green', 'red', 'blue'], 
    ['red', 'red', 'red', 'red'], 
    ['red', 'black', 'white', 'green'], 
    ['green', 'green', 'green', 'white'], 
    ['black', 'yellow', 'green', 'green'], 
    ['blue', 'green', 'red', 'black'], 
    ['yellow', 'black', 'red', 'yellow'], 
    ['yellow', 'yellow', 'white', 'white'], 
    ['blue', 'red', 'blue', 'white']
]

let score = [];
let attempts=0;
let max=12;
let code;

let colors = document.querySelectorAll('.colorselection');
let selectedColor;

let rows = document.querySelectorAll(".row");
rows = [...rows].reverse();
rows.forEach(row => {
    row.played = false;
})

let placeholders;
let play = document.querySelector('.playbutton')


generateCode();
round(); 

game();

function game() {
    // updateScore();
    play.addEventListener('click', () => {
        clearField();
        generateCode();
        round(); 
    })
}

function clearField() {
    rows.forEach(row => {
        row.played = false;
    })

    let answer = document.querySelectorAll('.answer');
    answer.forEach(pawn => {
        pawn.style.display = "none";    
    });

    let numbers = document.querySelectorAll('.rownumber');
    numbers.forEach(number => {
        number.style.fontWeight = 'initial';
        number.style.color = 'var(--gravings)';
    });

    placeholders = document.querySelectorAll('.attempt .pawn');
    placeholders.forEach(placeholder => {
        placeholder.className = "placeholder";
    });

    let tipPlaceholders = document.querySelectorAll('.result .keg');
    tipPlaceholders.forEach(placeholder => {
        placeholder.className = "placeholder";
        placeholder.style.backgroundColor = "var(--hole)";
        placeholder.style.border = 'none';
    });

}

function generateCode() {
    if (codes.length === 0) {
        console.log("All codes have been used.");
        return null;
    }

    const index = Math.floor(Math.random() * codes.length);
    code = codes[index];
    codes.splice(index, 1); // Remove the selected code from the array
    return code;
}

function round() {
    selectColor();
    drawConfirmationButton();
    placePawn();

    let button = document.querySelector('.confirm button')
    button.addEventListener("click", ()=> {
            if(score.length>=max)EndGame(false);
        if (checkForFullRow()) {
            attempts++;
            let givenAnswer = checkForFullRow();
            let tips = [];

            for (let i = 0; i < code.length; i++) {
                if (code[i] === givenAnswer[i]) {
                    tips.push("black");
                    givenAnswer[i] = "check";
                } else {
                    for (let j = 0; j < code.length; j++) {
                        if (code[i] === givenAnswer[j]) {
                            if (code[j] !== givenAnswer[j]) {
                                tips.push("white")
                                givenAnswer[j] = "check";
                                j = code.length;
                            } 
                        }
                    }
                } 
            }

            tips.sort((a, b) => (a === 'black') ? -1 : 1);

            drawTips(tips);

            let giveUpBtn = document.querySelector('#skipBar')

            if (attempts < 5) {
                console.log('someting')
                giveUpBtn.disabled = true;
                giveUpBtn.title = "Unlocks in " + (5 - attempts) + " moves";
            } else {
                console.log(attempts)
                giveUpBtn.title = "Don't do it Anakin!";
                giveUpBtn.disabled = false;
            }

            if (tips[3] === 'black') {

                rows.forEach(row => {
                    let confirm = row.querySelector('.confirm');
                    let number = row.querySelector('.rownumber');
                    confirm.innerHTML = null;
                    if (checkActiveRow(0) === row) {
                        score.push(number.textContent);
                    }
                });
                showAnswer();
                removeConfirmationButton();
                checkForFullRow() = null;
                return game();
            }else if (attempts>=max){
            EndGame(false);
            }
            checkActiveRow(0).played = true;
            return round();
        }
    })
}

function selectColor() {
    colors.forEach(color => {
        color.addEventListener('click', ()=> {
            changeSelectedColor(color);
            selectedColor = color.id;
        })
    });
}

function changeSelectedColor(selectedColor) {
    colors.forEach(color => {
        color.classList.remove("selected");
        if (color === selectedColor) {
            color.classList.add("selected");
        }
    });
}

function drawConfirmationButton() {
    rows.forEach(row => {
        let confirm = row.querySelector('.confirm');
        let number = row.querySelector('.rownumber');
        confirm.innerHTML = null;
        if (checkActiveRow(0) === row) {
            number.style.fontWeight = 'bold';
            number.style.color = 'white';

            confirm.innerHTML = "<button>✓</button>";
        }
    });
}

function removeConfirmationButton() {
        rows.forEach(row => {
        let confirm = row.querySelector('.confirm');
        confirm.innerHTML = null;
    });
}

function checkActiveRow(i) {
    if (rows[i].played === false) {
        return rows[i];
    } else {
        return checkActiveRow(i+1);
    }
}

function placePawn() {
    if (placeholders) {
        placeholders.forEach(placeholder => {
            placeholder.removeEventListener("click", colorPawn);            
        });
    }

    placeholders = checkActiveRow(0).querySelectorAll('.attempt .placeholder');

    
    placeholders.forEach(placeholder => {
        placeholder.addEventListener("click", colorPawn);
        // const placeholderRect = placeholder.getBoundingClientRect();
        // const centerX = placeholderRect.left + placeholderRect.width / 2;
        // const centerY = placeholderRect.top + placeholderRect.height / 2;

        // dimension = (placeholder.clientWidth)
        // console.log(dimension)

        // function colorPawn(event) {
        //     // Calculate the coordinates of the center of the placeholder
    
        //     // Calculate the distance between the click position and the center of the placeholder
        //     const distance = Math.sqrt(Math.pow(event.clientX - centerX, 2) + Math.pow(event.clientY - centerY, 2));
    
        //     // Define the radius within which the click should trigger the function
        //     const clickRadius = (dimension); // Adjust as needed
    
        //     // If the click is within the defined radius, trigger the function
        //     if (distance <= clickRadius) {
        //         console.log("Clicked!");
        //         yo(event)
        //     }
        // }
    });
}

function colorPawn(e) {
    if (selectedColor) {
        e.target.className = 'pawn ' + selectedColor;
        e.target.color = selectedColor;
    }
}

function checkForFullRow() {
    let code = [null, null, null, null]
    for (let i = 0; i < placeholders.length; i++) {
        if (placeholders[i].color) {
            code[i] = placeholders[i].color;
        }
    }

    if (!code.includes(null)) {
        return code
    } else {
        return false
    }
}

function drawTips(tips) {
    let tipPlaceholders = checkActiveRow(0).querySelectorAll('.result .placeholder');
    for (let i = 0; i < tipPlaceholders.length; i++) {
        const placeholder = tipPlaceholders[i];
        if (tips[i] === 'black') {
            placeholder.className = "keg";
            placeholder.style.backgroundColor = "var(--black)";
            placeholder.style.border = "1px solid var(--gravings)"
        } else if(tips[i] === "white") {
            placeholder.className = "keg"
            placeholder.style.backgroundColor = "var(--white)";
            placeholder.style.border = "1px solid var(--gravings)"
        }
    }
}

function showAnswer(){
    let answer = document.querySelectorAll('.answer');
    for (let i = 0; i < answer.length; i++) {
        answer[i].style.display = 'initial';
        answer[i].style.backgroundColor = 'var(--' + code[i] + ')';
        
    }
    setTimeout(EndGame(true), 500);
}

function EndGame(win=false){
    if(win){
        let storeThis = document.getElementById("skill");
        storeThis.value = "HTML & CSS";
        let popup = document.querySelector('#won');
        popup.style.display = "block";
    }else{
        let popup = document.querySelector('#lost');
        popup.style.display = "block";
    }
}
