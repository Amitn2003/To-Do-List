<?php



include "config.php";

$id = $_POST['id'];
$task = $_POST['task'];

mysqli_query($con, "UPDATE `todo` SET `task`='$task' WHERE id = $id");

header("location:index.php");


?>