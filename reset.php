<?php
// démarre la session
// session_start();

// supprime toutes les variables de session
$_SESSION = array();

// supprime le cookie de session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// détruit la session
session_destroy();


// reset les fichiers de variables IOT
$data = 0;

$file1 = 'model/relique_finale.txt';
file_put_contents($file1, $data);

$file2 = 'model/sound_start.txt';
file_put_contents($file2, $data);

?>