if (window.orientation !== 90 && window.orientation !== -90) {
    // User is not in horizontal orientation, prompt for rotation
    document.getElementById("turn-tablet").style.display = "grid";
} else {
    document.getElementById("turn-tablet").style.display = "none";
}

window.addEventListener("orientationchange", function() {
    if (window.orientation !== 90 && window.orientation !== -90) {
        // User is not in horizontal orientation, prompt for rotation
        document.getElementById("turn-tablet").style.display = "grid";
    } else {
        document.getElementById("turn-tablet").style.display = "none";
    }
});