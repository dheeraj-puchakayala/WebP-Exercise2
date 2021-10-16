<?php
session_start();
$con = mysqli_connect('127.0.0.1:3306','root','','webp_auth_db') or die('Unable To connect');
$message="";

if(count($_POST)>0 || $_SERVER["REQUEST_METHOD"] == "POST") {
$pass_hash = password_hash($_POST["password"],PASSWORD_BCRYPT);
$result = mysqli_query($con,"SELECT * FROM users WHERE username='" . $_POST["username"] . "'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
  if(password_verify($_POST["password"],$row["password"])){
$_SESSION["id"] = $row['userid'];
echo "Login Successful";
  }
  else {
    $message = "Invalid Username or Password!";
    }
} else {
$message = "Invalid Username or Password!";
}
}

if(isset($_SESSION["id"])) {
    header("Location:http://localhost/WebCoursera/index.php");
    }
?>

<html>
    <head>
        <title>
            Login
        </title>
        <script>
          var limit = 5
          function login_logic() {
            let uname = document.getElementById("username").value;
            let pword = document.getElementById("password").value;
            if(uname == "root@abc.com" && pword == "root"){
              alert("Successfull Login")
              let name = "session"
              document.cookie = name +'= 1; Path=/;'
              document.location = "index.php";
              // return false;
            }
            
            else{
              limit--;
              alert("\nIncorrect Credentials\n" + limit + " attempts left" )
            }

            if (limit == 0) {
              document.getElementById("username").disabled = true;
              document.getElementById("password").disabled = true;
              document.getElementById("login").disabled = true;
              
              setTimeout(function(){
                document.getElementById("username").disabled = false;
                document.getElementById("password").disabled = false;
                document.getElementById("login").disabled = false;
                document.location = "login.php"
              }, 3000);

              
            }
          }
        </script>
        <script
          src="https://code.jquery.com/jquery-3.3.1.js"
          integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
          crossorigin="anonymous">
        </script>
        <script> 
          $(function(){ $("head").load("templates/links.php") });
        </script>
        <script> 
          $(function(){ $("footer").load("templates/footer.php") });
        </script>
    </head>
    <body>
        <!-- <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
            
          </div> -->
          <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
              <div class="modal-header p-5 pb-4 border-bottom-0">
                <h5 style="font-family: 'Source Sans Pro', sans-serif; color: #5bc0de;"><a href="index.php" style="text-decoration: none;">WebCoursera</a></h5>
                <h2 class="fw-bold mb-0">Login</h2>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
              </div>
        
              <div class="modal-body p-5 pt-0">
                <form method="post">
                <?php if($message!="") { echo $message; } ?>
                  <div class="form-floating mb-3">
                    <input id ="username" type="text" name="username" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">User Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input id = "password" type="password" name="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <button id="login" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Login</button>
                  <!-- <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small> -->
                  <hr class="my-4">
                  New to WebCoursera? <a href="signup.php" style="text-decoration: none;"> Sign up </a>
                </form>
              </div>
            </div>
          </div>

        <footer ></footer>
    </body>
</html>