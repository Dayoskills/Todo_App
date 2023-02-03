<?php
include("connection.php");
$id = $_POST['id'];
$list = $_POST['list'];
$sql = "UPDATE `todolist` SET `list`='$list' WHERE id= $id;";
mysqli_query($conn, $sql);
header("location: index.php");

?>