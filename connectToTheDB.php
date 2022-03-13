<?php
    $connect = mysqli_connect("localhost", "root", "mysql", "MovieDB");
    if(!$connect){
        die("Unable to establish connection");
    }
?>