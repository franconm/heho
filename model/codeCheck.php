<?php
// ========== Checking code function ============
function checkCode($right_code)
{
    // If form sent
    if (isset($_POST['code1']) and isset($_POST['code2']) and isset($_POST['code3']) and isset($_POST['code4'])) {
        // Treatment and check
        $input_code = strval($_POST['code1']) . strval($_POST['code2']) . strval($_POST['code3']) . strval($_POST['code4']);

        if ($input_code == $right_code) {
            $_SESSION['codes_state'][$_GET["n"] - 1] = true;

            if ($_GET["n"] == 1) {
                header('Location: talking.php?n=2');
            } else if ($_GET["n"] == 2) {
                header('Location: talking.php?n=4');
            } else if ($_GET["n"] == 3) {
                header('Location: talking.php?n=5');
            } else if ($_GET["n"] == 4) {
                header('Location: talking.php?n=8');
            }
        } else {
            echo "<script>alert('Code non approuvé, veuillez réessayez !');</script>";
        }
    }
}

?>