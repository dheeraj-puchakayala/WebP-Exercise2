<?php
session_start();
if(! isset($_SESSION['id'])){
  echo "<script>window.location='//localhost/WebCoursera/login.php'</script>";
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
          $(function(){ $("head").load("../templates/links.php") });
        </script>
        <script> 
          $(function(){ $("header").load("../templates/header.php") });
        </script>
        <script> 
          $(function(){ $("footer").load("../templates/footer.php") });
          console.log(document.location.hostname)
        </script>
        

    
    </head>
    <body>
        <?php 
            $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
            $courseid = $_GET["course_id"];
            // echo $courseid;
            $sql = "SELECT * FROM courses WHERE courseid='".$courseid."'";
            $row = mysqli_query($con,$sql);
            $course = mysqli_fetch_array($row);
        ?>
        <header></header>

        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
          <a href="../courses/course_page.php?course_id=<?php echo $courseid?>" style="text-decoration:none;"><h1 class="display-5 fw-bold"><img src=<?php echo $course["course_img"]?> style="width: 180px; height: 180px;"> <?php echo $course["course_name"];?></h1></a>
             <?php 
              $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect'); 
              $sql = "SELECT COUNT(*) FROM course_reg WHERE courseid='".$courseid."' AND userid='".$_SESSION["id"]."'";
              $row = mysqli_query($con,$sql);
              $register = mysqli_fetch_array($row);
            //   echo($register[0]);
            //   if($register[0]== 0){
            //     echo '<button class="btn btn-info btn-lg" type="button" onclick="register();">Register for this Course</button>';
            //   }
            //   else{
            //     echo '<p class="col-md-8 fs-4" style = "margin-top: 30px;">Check Your Progress</p>
            //     <div class="progress" style="margin-top: 20px; height: 30px">
            //       <div class="progress-bar bg-info" id="progress" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            //     </div>';
            //   }
            ?>

          </div>
        </div>

        <?php
                  echo '<div class="container px-4 py-5">
                  <h2 class="pb-2 border-bottom">Register Now</h2>
                  <div class="row g-4 py-5 row-cols-1 row-cols-lg-1">';
                $sql = "SELECT COUNT(*) FROM `course_reg` WHERE courseid='".$courseid."'";
                $row = mysqli_query($con,$sql);
                $res = mysqli_fetch_array($row);
                echo '<h4>'.$res[0].' have already registered</h4>';
                $sql = "SELECT u.name FROM users u, course_reg cr WHERE cr.courseid='".$courseid."' AND cr.userid=u.userid";
                $row = mysqli_query($con,$sql);
                echo '<div class="col d-flex align-items-start">
                  <div>
                  <ul>';
                while($res = mysqli_fetch_array($row)){
                    echo'
                      <li><em>'.$res["name"].'</em></li>';
                    
                }
                echo '</ul>
                </div>
              </div>
                </div>
                  </div>';
        ?>



                      


        <footer></footer>
    </body>