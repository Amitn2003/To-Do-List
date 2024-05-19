<?php
include "config.php";


$task = $_POST['task'];

echo $task;

$insertsql = "INSERT INTO `todo`(`task`, `time`) VALUES ('$task', NOW())";

mysqli_query($con, $insertsql);

header("location:index.php");









?>