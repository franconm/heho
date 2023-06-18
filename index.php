<?php
require('model/session.php');
// ========== Definition of codes =============
$_SESSION['codes'] = [1503, 2635, 1507, 7373];
$_SESSION['codes_state'] = [false, false, false, false];
$_SESSION['relique_finale'] = false;

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
    <link rel="stylesheet" href="public/css/home.css">

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
</head>
<body>
    <?php require('public/view/template.php');?>
    <!-- Main content -->
    <main>
        <img src="public/img/logo.png" alt="Logo - Le secret de la dent du chat">
        <a id="start-btn" href="talking.php?n=1">Commencer la partie</a>
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