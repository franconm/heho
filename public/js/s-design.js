// Get the button element
var button = document.querySelector('button');

// Define the audio element
var audio = new Audio('path/to/audio/file.mp3');

// Add a click event listener to the button
button.addEventListener('click', function() {
    // Play the audio
    audio.play();
});
