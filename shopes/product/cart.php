<?php
$url = 'http://shopes/api/api.php?action=cart&id=';
$res = file_get_contents($url);
$item = $res;
var_dump($item);
echo "<br>";
?>