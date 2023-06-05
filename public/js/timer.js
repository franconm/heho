// Fonction pour formater le temps
function formatTime(time) {
  let minutes = Math.floor((time % 3600) / 60);
  let seconds = Math.floor(time % 60);

  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;

  return minutes + ":" + seconds;
}



// Function to update the timer and progress bar
function updateTimerAndProgressBar() {
  let currentTime = new Date().getTime();
  let elapsedTime = Math.floor((currentTime - startTime) / 1000);
  
  let remainingTime = initialDuration - elapsedTime;
  
  if (remainingTime <= 0) {
    // Timer finished, reset and redirect
    clearInterval(timerInterval);
    resetTimer();
    window.location.href = "result.php";
    return;
  }
  
  // Update the timer display
  let timePrint = document.getElementsByClassName("time-print");
  for (let x = 0; x < timePrint.length; x++) {
    timePrint[x].textContent = formatTime(remainingTime);
  }
  
  // Calculate the progress bar fill percentage
  let progressBarFill = document.querySelector(".progress-bar-fill");
  let fillPercentage = (elapsedTime / initialDuration) * 100;
  progressBarFill.style.width = fillPercentage + "%";
  
  // Save the elapsed time in localStorage
  localStorage.setItem("elapsedTime", elapsedTime);
}



// Fonction pour réinitialiser le timer
function resetTimer() {
  clearInterval(timerInterval);
  localStorage.removeItem("elapsedTime");
}




// Vérifier si une valeur elapsedTime est déjà stockée dans le localStorage
let storedElapsedTime = localStorage.getItem("elapsedTime");

let initialDuration = 3600; // Durée initiale en secondes (3600 = 60 minutes)
let startTime;
let timerInterval;

if (storedElapsedTime) {
  let storedStartTime = new Date().getTime() - (parseInt(storedElapsedTime) * 1000);
  startTime = storedStartTime > 0 ? storedStartTime : new Date().getTime();
} else {
  startTime = new Date().getTime();
}

// Call the updateTimerAndProgressBar function every second
timerInterval = setInterval(updateTimerAndProgressBar, 1000);
