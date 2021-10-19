<?php
    $vids= $_GET["view"];
    $cid = $_GET["cid"];
    $uid = $_GET["uid"];
    $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
    $sql = "UPDATE `course_reg` SET `viewed_videos`='".$vids."' WHERE userid='".$uid."' AND courseid='".$cid."'";
    $row = mysqli_query($con,$sql);
    if($row != 0){
    echo "Successfully Register for the course";
    }
    else{
    echo "Unable to register try again";
    }
?>