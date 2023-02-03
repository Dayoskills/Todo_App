<?php
include ("connection.php");
$id = $_GET['del_list'];
$sql3 = "DELETE FROM `todolist` WHERE id= $id";
mysqli_query($conn, $sql3);
header("location: index.php");

?>