document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("animationButton"); // Replace 'yourButtonId' with the actual ID of your button
    const gifImage = document.getElementById("gifImage");
    const userImage = document.getElementById("userImage");

    // Add event listener for hover
    animationButton.addEventListener("mouseenter", function () {
        // Show GIF
        gifImage.style.display = "block";
        userImage.style.display = "none";
    });

    // Add event listener for mouseleave
    animationButton.addEventListener("mouseleave", function () {
        // Show original image
        gifImage.style.display = "none";
        userImage.style.display = "block";
    });
});
