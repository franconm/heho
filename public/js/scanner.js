/* ======================= GET DATA ============================== */
// Get the GET Data
var urlParams = new URLSearchParams(window.location.search);

// Get the value of a specific parameter
var nScan = urlParams.get('n');



/* ======================= QR CODE SCANNER ============================== */
// Create a scanner instance
let scanner = new Instascan.Scanner({ video: document.getElementById('scanner-video'), mirror: false });
// let scanner = new Instascan.Scanner({ video: document.getElementById('scanner-video') });

// Add a scan event listener
scanner.addListener('scan', function (content) {
  if (nScan == 1) {
    window.location.href = content + '?n=1';
  }
  else if (nScan == 2) {
    window.location.href = content;
  }
  else if (nScan == 3) {
    window.location.href = content;
  }
  else if (nScan == 4) {
    window.location.href = content + '?n=4';
  }
});

// Start scanning
Instascan.Camera.getCameras().then(function (cameras) {
  if (cameras.length > 0) {
    let backCamera = cameras.find(camera => camera.name.toLowerCase().includes('back'));
    if (!backCamera) {
      // Handle the case when a back camera is not found
      console.error('Back camera not found!');
    } else {
      scanner.start(backCamera);
    }
  } else {
    // Handle the case when no cameras are found
    console.error('No cameras found!');
  }
}).catch(function (error) {
  // Handle any errors that occur during camera detection
  console.error('Error detecting cameras:', error);
});


