document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("radioOptionButton");
    const gifImage = document.getElementById("gifImage");
    const userImage = document.getElementById("userImage");
    const radioInputs = document.querySelectorAll('input[type="radio"]');

    // Function to enable button and change its color
    function enableButton() {
        button.disabled = false;
        button.classList.add("buttonWhite");
        button.classList.remove("buttonGrey");
        button.addEventListener("mouseenter", showGifImage);
        button.addEventListener("mouseleave", showUserImage);
    }

    // Function to disable button and change its color
    function disableButton() {
        button.disabled = true;
        button.classList.remove("buttonWhite");
        button.classList.add("buttonGrey");
        button.removeEventListener("mouseenter", showGifImage);
        button.removeEventListener("mouseleave", showUserImage);
    }

    // Function to show gif image on hover
    function showGifImage() {
        gifImage.style.display = "block";
        userImage.style.display = "none";
        button.style.cursor = "pointer";
        button.style.textDecoration = "underline";
    }

    // Function to show user image on hover out
    function showUserImage() {
        gifImage.style.display = "none";
        userImage.style.display = "block";
        button.style.cursor = "not-allowed";
        button.style.textDecoration = "none";
    }

    // Add event listener to each radio input
    radioInputs.forEach((input) => {
        input.addEventListener("change", function () {
            if (this.checked) {
                enableButton();
            } else {
                disableButton();
            }
        });
    });
});
