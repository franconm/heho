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
    <link rel="stylesheet" href="public/css/talking.css">

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
    <script src="public/js/timer.js" defer></script>
    <script src="public/js/splitText.js" defer></script>
    <script src="public/js/typeWriter.js" defer></script>
    <script src="public/js/talking.js" defer></script>
</head>

<body>
    <?php require('public/view/template.php'); ?>

    <!-- Main content -->
    <main>
        <?php if ($_GET["n"] == 1 or $_GET["n"] == 2) { ?>
            <img src="public/img/babette.gif" alt="Babette Illustration">
        <?php } else { ?>
            <img src="public/img/leonard.gif" alt="Léonard de Vinci Illustration">

            <!-- enable sound in Passulurian room -->
            <?php
            $file = 'model/sound_start.txt';
            $data = 1;
            file_put_contents($file, $data);
            ?>
        <?php } ?>

        <div>
            <p id="message"></p>
            <a id="next-btn">Suivant</a>
            <a id="ok-btn">Ok</a>
        </div>
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