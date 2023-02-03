<?php
include "connection.php";

$list = $_POST['list'];
$sql = "INSERT INTO todolist (list) VALUES ('$list');";
mysqli_query($conn, $sql);
header("location: index.php");
?>