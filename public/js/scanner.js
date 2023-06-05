/* ======================= GET DATA ============================== */
// Get the GET Data
var urlParams = new URLSearchParams(window.location.search);

// Get the value of a specific parameter
var nScan = urlParams.get('n');



/* ======================= QR CODE SCANNER ============================== */
// Create a scanner instance
let scanner = new Instascan.Scanner({ video: document.getElementById('scanner-video') });

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
    // Use the rear camera by default, or specify the desired camera
    let backCamera = cameras[cameras.length - 1];
    scanner.start(backCamera);
  } else {
    scanner.start(cameras[0]);
    // console.error('No cameras found.');
  }
}).catch(function (error) {
  console.error(error);
});
