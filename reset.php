<?php
// Finds all server sessions
session_start();
// Stores in Array
$_SESSION = array();
// Swipe via memory
if (ini_get("session.use_cookies")) {
    // Prepare and swipe cookies
    $params = session_get_cookie_params();
    // clear cookies and sessions
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
// Just in case.. swipe these values too
ini_set('session.gc_max_lifetime', 0);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);
// Completely destroy our server sessions..
session_destroy();
?>

<!-- clear local storage -->
<script>
    localStorage.clear();
</script>


<?php
// reset files of IOT variables
$data = 0;

$file1 = 'model/relique_finale.txt';
file_put_contents($file1, $data);

$file2 = 'model/sound_start.txt';
file_put_contents($file2, $data);
?>