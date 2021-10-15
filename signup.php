<?php
session_start();
?>

<html>
    <head>
        <title>
            SignUp
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
        $(function(){ $("footer").load("templates/footer.php") });
      </script>
    </head>
    <body>

        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
              <div class="modal-header p-5 pb-4 border-bottom-0">
                <h5 style="font-family: 'Source Sans Pro', sans-serif; color: #5bc0de;"><a href="index.php" style="text-decoration: none;">WebCoursera</a></h5>
                <h2 class="fw-bold mb-0">Sign Up</h2>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
              </div>
        
              <div class="modal-body p-5 pt-0">
                <form class="">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-4" id="name" placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-4" id="name" placeholder="name@example.com">
                        <label for="floatingInput">User Name</label>
                    </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-4" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-4" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-4" id="c_password" placeholder="Password">
                    <label for="floatingPassword">Confirm Password</label>
                  </div>
                  <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">SignUp</button>
                  <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                  <hr class="my-4">
                  Already on WebCoursera? <a href="login.php" style="text-decoration: none;"> Login </a>
                </form>
              </div>
            </div>
          </div>
        
        <footer></footer>
    </body>
</html>