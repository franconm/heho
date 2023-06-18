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
    <link rel="stylesheet" href="public/css/clues.css">
    <link rel="stylesheet" href="public/css/waiting.css">

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
    <script src="public/js/timer.js" defer></script>
    <script src="public/js/relique_finale_request.js" defer></script>
</head>
<body>
    <?php require('public/view/template.php');?>
    <!-- Main content -->
    <main>
        <h1 class="time-print time-print-home"></h1>
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