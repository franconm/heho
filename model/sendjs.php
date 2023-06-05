<?php 
require('session.php');
header('Content-Type: application/json');

$codes_state = [];
foreach ($_SESSION['codes_state'] as $c) {
    $codes_state[] = $c;
}
echo json_encode($codes_state);
?>