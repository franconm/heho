<?php
// reset les variables de session
ini_set('session.gc_max_lifetime', 0);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);


// reset files of IOT variables
$data = 0;

$file1 = 'model/relique_finale.txt';
file_put_contents($file1, $data);

$file2 = 'model/sound_start.txt';
file_put_contents($file2, $data);

?>