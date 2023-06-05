<?php
require('model/session.php');
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
    <link rel="stylesheet" href="public/css/result.css">

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
    <script src="public/js/result.js" defer></script>
</head>

<body>
    <!-- Main content -->
    <main>
        <video id="result-video" poster>
            <?php 
                // Check if all equal to true
                $allTrue = array_reduce($_SESSION['codes_state'], function($carry, $item) {
                    return $carry && is_bool($item) && $item === true;
                }, true);

                if ($allTrue) {
            ?>
                <source src="public/video/success.mp4" type="video/mp4">
            <?php } else { ?>
                <source src="public/video/fail.mp4" type="video/mp4">
            <?php } ?>
        </video>
        <button id="play-button"></button>
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