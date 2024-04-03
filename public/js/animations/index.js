document.addEventListener("DOMContentLoaded", function () {
    const hoverOnlyButton = document.getElementById("hoverOnlyButton");
    const gifImage = document.getElementById("gifImage");
    const userImage = document.getElementById("userImage");

    // Add event listeners for hover effect for hoverOnlyButton
    hoverOnlyButton.addEventListener("mouseenter", function () {
        gifImage.style.display = "block";
        userImage.style.display = "none";
    });

    hoverOnlyButton.addEventListener("mouseleave", function () {
        gifImage.style.display = "none";
        userImage.style.display = "block";
    });
});
