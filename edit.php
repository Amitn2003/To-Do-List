<?php

include "config.php";

$id = $_GET['id'];
$rawData = mysqli_query($con, "SELECT * FROM todo where id = $id");
// echo $rawData;
$row = mysqli_fetch_array($rawData);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<HEAder>
        <H2>To Do App</H2>
    </HEAder>
    <div class="main">
        <div class="box">
            <form action="update1.php" method="post">
                <input type="text" name="task" id="taskInput" placeholder="Add new task here" value="<?php echo $row['task']; ?>" autofocus>
                <input type="text" name="id" id="id" placeholder="Enter your task here..." value="<?php echo $row['id']; ?>" hidden>
                <input type="submit" id="submitBtn" value="Edit Task">
            </form>
            
        </div>
    </div>
    
    <!-- Get the data -->
    
</body>

</html>