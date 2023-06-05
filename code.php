<?php
require('model/session.php');
require('model/tabletFunction.php');
require('model/codeCheck.php');

// // Check if the user is accessing the site from a tablet
// if (isTablet()) {

checkCode($_SESSION['codes'][$_GET["n"] - 1]);
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
    <link rel="stylesheet" href="public/css/waiting.css">
    <link rel="stylesheet" href="public/css/form.css">

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
    <script src="public/js/timer.js" defer></script>
    <script src="public/js/form.js" defer></script>
</head>

<body>
    <?php require('public/view/template.php'); ?>

    <!-- Main content -->
    <main>
        <h1>ENTREZ LE CODE POUR VOYAGER DANS LE TEMPS</h1>

        <?php if ($_GET['n'] == 4) { ?>
            <h2>(Attendez que tout le monde soit revenu avant de voyager à nouveau)</h2>
        <?php } ?>

        <form id="codeForm" action="" method="post" autocomplete="off">
            <input id="code1" type="text" name="code1" maxlength="1" pattern="[0-9]" required autofocus>
            <input id="code2" type="text" name="code2" maxlength="1" pattern="[0-9]" required>
            <input id="code3" type="text" name="code3" maxlength="1" pattern="[0-9]" required>
            <input id="code4" type="text" name="code4" maxlength="1" pattern="[0-9]" required>
        </form>
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