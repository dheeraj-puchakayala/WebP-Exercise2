<?php
session_start();
$con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
$message = "";
if (count($_POST)>0){
  $pass = $_POST["password"];
  $cpass = $_POST["c_password"];
  if($pass != $cpass){
    $message = "Passwords don't match";
  }
  else{
    $pass_hash = password_hash($pass,PASSWORD_BCRYPT);
    $sql = "UPDATE `users` SET `password`='".$pass_hash."' WHERE userid='".$_SESSION["id"]."'";
    // echo $sql;
    $res = mysqli_query($con,$sql);
    if($res != 0){
      // echo "inserted";
      $message = "Password Changed!!!";
      // header("Location:http://localhost/WebCoursera/profile.php");
    }
    else{
      echo $con->error;
    }
  }

}
?>
<html>
    <head>
        <title>
          WebCoursera           
        </title>
        <script
          src="https://code.jquery.com/jquery-3.3.1.js"
          integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
          crossorigin="anonymous">
        </script>
        <script> 
          $(function(){ $("head").load("templates/links.php") });
        </script>
        <script> 
          $(function(){ $("header").load("templates/header.php") });
        </script>
        <script> 
          $(function(){ $("footer").load("templates/footer.php") });
        </script>

    </head>
    <body>

      <header></header> 
      <?php 
        $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
        $sql = "SELECT * FROM users WHERE userid='".$_SESSION["id"]."'";
        $row = mysqli_query($con,$sql);
        $res = mysqli_fetch_array($row);
        $sql = "SELECT c.course_name FROM courses c, course_reg cr WHERE cr.userid='".$_SESSION["id"]."' AND c.courseid = cr.courseid";
        $row = mysqli_query($con,$sql);
      ?>
      
      <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center" style="backgroud-color:white;"> <button class="btn btn-secondary"> <img src="https://icons-for-free.com/iconfiles/png/512/business+costume+male+man+office+user+icon-1320196264882354682.png" height="100" width="100" /></button> <span class="name mt-3"><?php echo $res["name"]; ?></span> <span class="idd"><?php echo $res["email"]; ?></span>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">  <span class="follow"><b>Registered Courses</b></span> </div>
                
                <div class="text mt-3"> <span><?php while($res1 = mysqli_fetch_array($row)){
                  echo "".$res1[0]."<br>";
                } ?>
                </span> </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">  <span class="follow"><b>Change Password</b></span> </div>
                <div style="height:0.5cm"></div>
                <div>
                <form method = "post">
                <?php if($message!="") { echo $message; } ?>
                <div class="form-floating mb-3">
                
                    <input type="password" class="form-control rounded-4" id="password" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-4" id="c_password" name="c_password" placeholder="Password">
                    <label for="floatingPassword">Confirm Password</label>
                  </div>
                <div class=" d-flex mt-2"> <button class="btn1 btn-dark" type="submit">Submit</button> </div>
                </form>
              </div>
            </div>
        </div>
    </div>

      <footer></footer>

    </body>
</html>