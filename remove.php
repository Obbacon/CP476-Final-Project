<?php
    include("connectToTheDB.php");
    $getTheID = $_GET['id'];
    $data = "Removing: $getTheID ";
    mysqli_query($connect, $data);
?>