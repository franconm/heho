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

    <!-- JS -->
    <script src="public/js/orientation.js" defer></script>
</head>
<body>
    <!-- Main content -->
    <main>
        <h1>Merci d'avoir joué, à bientôt !</h1>
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