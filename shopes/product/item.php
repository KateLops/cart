<?php
$url = 'http://shopes/api/api.php?action=item&id=1';
$res = file_get_contents($url);
$item = $res;
var_dump($item);
echo "<br>";
?>