var fileUrl = 'model/relique_finale.txt';

function checkFileChange() {
  var xhr = new XMLHttpRequest();
  
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var currentContent = xhr.responseText.trim();
      
      if (currentContent === '1') {
        // File content matches '1'

        var audio = new Audio('public/audio/alright.wav');
        audio.play();

        setTimeout(function(){
          window.location.href = "result.php";
        }, 2000);
      } else {
        // File content does not match '1'
        console.log('File content does not match "1".');
      }
    }
  };
  
  xhr.open('GET', fileUrl, true);
  xhr.send();
}

// Call the function every 1 second
setInterval(checkFileChange, 1000);
