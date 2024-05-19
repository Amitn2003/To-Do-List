<?php
include "config.php";

$id = $_GET['id'];

// echo $id;
$deleteQuery = "DELETE FROM `todo` WHERE id = $id";
mysqli_query($con, $deleteQuery);

header("location:index.php");








?>