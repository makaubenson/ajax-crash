<?php
//Create Connection
$conn = mysqli_connect('localhost','benson','benson','ajaxtest');

$query = "select * from users";

//get Result
$result = mysqli_query($conn, $query);

//Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Return data in json format
echo json_encode($users);
?>