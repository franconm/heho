var video = document.getElementById('result-video');
var playButton = document.getElementById('play-button');

window.addEventListener('load', function () {
  playButton.addEventListener('click', function () {
    video.play();
    playButton.style.display = 'none';
  });
});

video.addEventListener('ended', function () {
  // Perform the redirection here
  window.location.href = "thanks.php";
});
