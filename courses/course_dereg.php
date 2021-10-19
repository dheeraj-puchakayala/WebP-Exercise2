<?php
    $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
    $courseid = $_GET["cid"];
    $userid = $_GET["uid"];
    $sql = "DELETE FROM `course_reg` WHERE userid='".$userid."' AND courseid='".$courseid."'";
    $row = mysqli_query($con,$sql);
    if($row != 0){
    echo "Successfully Deregister for the course";
    }
    else{
    echo "Unable to deregister try again";
    }
?>