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
    <!-- <link rel="stylesheet" href="public/css/layout.css"> -->
    <link rel="stylesheet" href="public/css/color.css">
    <link rel="stylesheet" href="public/css/turn-tablet.css">
    <link rel="stylesheet" href="public/css/side-bar.css">

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
    <script src="public/js/timer.js" defer></script>

    <script src="librairies/aframe.min.js"></script>
    <!-- we import arjs version without NFT but with marker + location based support -->
    <script src="librairies/aframe-ar.js"></script>
</head>
<body>
    <?php require('public/view/template.php');?>

    <a id="back-btn" href="choice.php?n=1">Retour</a>

    <!-- Main content -->
    <a-scene embedded arjs>
        <a-marker preset="hiro">
            <a-text value="REGARDEZ DERRIÈRE LE TABLEAU !!!" color="white" background-color="black" rotation="-90 0 0" scale="0.8 0.8 0.8" align="center"></a-text>
        </a-marker>
        <a-entity camera></a-entity>
    </a-scene>
</body>
</html>


<?php

// } else {
//     // User is not on a tablet, redirect to a different page or display an error message
    
//     header('Location: tablet-only-error.php'); // Redirect to an error page
//     exit();
// }

?>