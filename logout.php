<?php
session_start();
unset($_SESSION["id"]);
// echo "Successfully logged out<br>";

echo "<script>setTimeout(\"location.href = 'http://localhost/WebCoursera/index.php';\",1500);</script>";
// $hello = ['I', 'love', 'ProcessWire', 'the end'];
// ob_implicit_flush(true);
// ob_end_flush();
// for($i = 0; $i < count($hello); $i++) {
//     echo $hello[$i].'<br>';
//     sleep(1);
// }
// sleep(1);
// echo "Redirecting<br>";

// header("Location:http://localhost/DBMS/Homepage/home.php");
//header("Location:login.php");
?>