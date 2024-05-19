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
            <div>
                <ul class="taskList" id="taskList">
                    <!-- <li><img src="checkbox-icon.svg" alt="" srcset="">Task Example 1111<span>X</span></li> -->
                    <?php
                    //$rawData = mysqli_query($con, "SELECT * FROM todo");
                        while($row = mysqli_fetch_array($rawData)){
                    ?>
                    <li>
                        <span><a href="delete.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-check"></i></a></span>
                        <span hidden>
                            <?php echo $row['id'] ?>
                        </span>
                        <span>
                            <?php echo $row['task'] ?>
                        </span>
                        
                            <!-- <?php echo $row['time'] ?> -->
                            <!-- </td> -->
                            <span><a href="edit.php?id=<?php echo $row['id'] ?>"><i class="fa-regular fa-pen-to-square"></i></a></span>
                            <!-- <span><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></span> -->
                    </li>
                    <?php
                    }   
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <form action="update1.php" method="post">
                <input type="text" name="task" id="task" placeholder="Enter your task here..." value="<?php echo $row['task']; ?>" autofocus >
                
                <input type="text" name="id" id="id" placeholder="Enter your task here..." value="<?php echo $row['id']; ?>" hidden>
                <input type="submit" value="Update Task">
            </form>
        </div>
    </main>
    <!-- Get the data -->
    
</body>

</html>