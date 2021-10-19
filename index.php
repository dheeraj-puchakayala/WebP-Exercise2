<?php
session_start();
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
        $sql = "SELECT COUNT(*) FROM users";
        $row = mysqli_query($con,$sql);
        $res = mysqli_fetch_array($row);
      ?>
      
      <div class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Welcome to WebCoursera</h1>
            <p class="lead text-muted" id = "logger1">Catch up the competition. Already <span ><b><?php echo $res[0]; ?></b></span> students have registered. Sign up now to access a wide range of informative and engaging videos on a variety of subjects. Start your learning experience today!</p>
            <p class="lead text-muted" id = "logger2">All the best on your learning experience. <b><?php echo $res[0]; ?></b> students have registered so far. Start your learning experience today!</p>
            <p id = "logger">
              <a href="login.php" class="btn btn-primary my-2 btn-lg bg-info border border-info">Login</a>
              <a href="signup.php" class="btn btn-secondary my-2 btn-lg">Sign Up</a>
            </p>
          </div>
        </div>
      </div>
      
  <div class="container px-4 py-5" id="custom-cards" onclick="return checkLoggedIn()">
    <h2 class="pb-2 border-bottom">Start Learning with in-demand Courses</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <a href="<?php echo $_SESSION['ROOT_FOLDER']?>courses/HTML.php" style="text-decoration: none;">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('images/PLANET-2.png'); background-size: cover;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">HTML</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="images/HTML.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
        <a href="<?php echo $_SESSION['ROOT_FOLDER']?>courses/CSS.php" style="text-decoration: none;" onclick="return checkLoggedIn()">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('images/PLANET-1.png'); background-size: cover;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">CSS</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="images/css.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
            </ul>
          </div>
        </div></a>
      </div>

      <div class="col">
        <a href="<?php echo $_SESSION['ROOT_FOLDER']?>courses/JAVASCRIPT.php" style="text-decoration: none;" onclick="return checkLoggedIn()">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('images/PLANET-3.png'); background-size: cover; ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">JAVASCRIPT</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="images/javascript.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>              
            </ul>
          </div>
        </div></div></a>
      </div>
    </div>
  </div>
              

      <footer></footer>

      <script>
        let cook1 = <?php echo (isset($_SESSION['id']))?$_SESSION['id']:"0"; ?>;
        let k = document.getElementById("logger")
        let l = document.getElementById("logger1")
        let m = document.getElementById("logger2")
        if(cook1 == "0"){
          k.style.display = "block"
          l.style.display = "block"
          m.style.display = "none"
        }
        else{
          k.style.display = "none"
          l.style.display = "none"
          m.style.display = "block"
        }
      </script>
    </body>
</html>