<?php
$link = mysqli_connect('localhost', 'root', '', 'shopes');

$id = $_GET['id'];
$action = $_GET['action'];

if($action == 'all') {
$query  = "SELECT * FROM items";
$result = mysqli_query($link, $query);
for ($item = []; $row = mysqli_fetch_assoc($result); $item[] = $row);
}

if($action == 'item') {
$query  = "SELECT * FROM items WHERE $id=id";
$result = mysqli_query($link, $query);
for ($item = []; $row = mysqli_fetch_assoc($result); $item[] = $row);
}

header('Content-Type: application/json');
echo json_encode($item, true);
?>