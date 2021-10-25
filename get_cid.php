<?php
    $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
    $course = $_GET["name"];
    $sql = "SELECT courseid FROM courses WHERE course_name='".$course."'";
    
    $row = mysqli_query($con,$sql);
    $res = mysqli_fetch_array($row);
    echo $res['courseid'];
?>