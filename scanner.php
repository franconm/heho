<?php
require('model/tabletFunction.php');

// // Check if the user is accessing the site from a tablet
// if (isTablet()) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Le secret de la dent du chat</title>
    <meta charset="UTF-8">

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/layout.css">
    <link rel="stylesheet" href="public/css/color.css">
    <link rel="stylesheet" href="public/css/turn-tablet.css">
    <link rel="stylesheet" href="public/css/side-bar.css">
    <link rel="stylesheet" href="public/css/scanner.css">

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
    <script src="public/js/timer.js" defer></script>
    <script src="public/js/scanner.js" defer></script>

    <!-- Include Instascan library -->
    <script src="librairies/instascan.min.js"></script>
</head>
<body>
    <?php require('public/view/template.php');?>

    <?php if ($_GET['n'] == 2 || $_GET['n'] == 3) { ?>
        <a id="back-btn" href="choice.php?n=1">Retour</a>
    <?php } else if ($_GET['n'] == 4) { ?>
        <a id="back-btn" href="choice.php?n=2">Retour</a>
    <?php } ?>

    <!-- Main content -->
    <main>
        <h1>Scan QR Code</h1>
        <video id="scanner-video"></video>
    </main>
</body>
</html>


<?php

// } else {
//     // User is not on a tablet, redirect to a different page or display an error message
    
//     header('Location: tablet-only-error.php'); // Redirect to an error page
//     exit();
// }

?>