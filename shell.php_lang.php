<?php

$dir = ".";
$files = scandir($dir);

print_r($files);
echo file_get_contents('index.php');

?>
