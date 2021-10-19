<?php
    $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
    $courseid = $_GET["cid"];
    $userid = $_GET["uid"];
    $sql = "INSERT INTO `course_reg`(`courseid`, `userid`) VALUES ('".$courseid."','".$userid."')";
    $row = mysqli_query($con,$sql);
    if($row != 0){
    echo "Successfully Register for the course";
    }
    else{
    echo "Unable to register try again";
    }
?>