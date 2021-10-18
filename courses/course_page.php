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
            $con = mysqli_connect('127.0.0.1:3306','root','','webp_auth_db') or die('Unable To connect');
            $courseid = $_GET["course_id"];
            // echo $courseid;
            $sql = "SELECT * FROM courses WHERE courseid='".$courseid."'";
            $row = mysqli_query($con,$sql);
            $course = mysqli_fetch_array($row);
        ?>
        <header></header>

        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"><img src=<?php echo $course["course_img"]?> style="width: 180px; height: 180px;"> <?php echo $course["course_name"];?></h1>
             <?php 
              $con = mysqli_connect('127.0.0.1:3306','root','','webp_auth_db') or die('Unable To connect'); 
            //   $fname = basename($_SERVER['PHP_SELF']);
            //   $fname = substr($fname,0, -4);
              $sql = "SELECT courseid FROM courses WHERE course_name='".$course["course_name"]."'";
              $row = mysqli_query($con,$sql);
              $res = mysqli_fetch_array($row);
              $sql = "SELECT COUNT(*) FROM course_reg WHERE courseid='".$res[0]."' AND userid='".$_SESSION["id"]."'";
              $row = mysqli_query($con,$sql);
              $res = mysqli_fetch_array($row);
            //   echo($res[0]);
              if($res[0]== 0){
                echo '<button class="btn btn-info btn-lg" type="button">Register for this Course</button>';
              }
              else{
                echo '<p class="col-md-8 fs-4" style = "margin-top: 30px;">Check Your Progress</p>
                <div class="progress" style="margin-top: 20px; height: 30px">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>';
              }
            ?>
            <!-- <p class="col-md-8 fs-4" style = "margin-top: 30px;">Check Your Progress</p>
            <div class="progress" style="margin-top: 20px; height: 30px">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div> -->
          </div>
        </div>


        <!-- References -->'
        <?php
           $sql = "SELECT * FROM course_ref WHERE courseid ='".$courseid."'";
           $row = mysqli_query($con,$sql);
        ?>
        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">References</h2>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-1">
              <?php 
                while($res = mysqli_fetch_array($row)){
                    echo '"<div class="col d-flex align-items-start">
                    <div>
                      <h4>".$res["ref_name"]."</h4>
                      <ul>
                        <li>Author:<em>".$res["author"]."</em></li>
                        <li>Edition:<em>".$res["edition"]."</em></li>
                        <li>Publication:<em>".$res["publication"]."</em></li>
                      </ul>
                    </div>
                  </div>"';
                }
                ?>
            
            <!-- <div class="col d-flex align-items-start">
              <div>
                <h4>Learning Web Design: A Beginner's Guide to HTML, CSS, JavaScript, and Web Graphics</h4>
                <ul>
                  <li>Author:<em>Jennifer Robins</em></li>
                  <li>Edition:<em>2nd edition</em></li>
                  <li>Publication:<em>Pearson</em></li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Video Lectures -->

        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">Video Lectures</h2>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-1">

            <!-- Short Videos -->
            <div class="col d-flex align-items-start">
              <div>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse0" aria-expanded="false" >
                  <h4>Short Videos</h4>
                </button>
                <div class="collapse" id="home-collapse0" >
                        <div class="album py-5 bg-light">
                          <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                <?php
                    $sql = "SELECT * FROM videos WHERE courseid='".$courseid."' AND video_type = 1";
                    $row = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($row)){
                        echo '<div class="col">
                                <div class="card shadow-sm">
                                  <a href="../videos/course_video.php?'.$res["video_link"].'"><img src="../images/'.$course["course_name"].'"-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                                  <div class="card-body">
                                    <h6>'.$res["video_name"].'</h6>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="list-group mx-0">
                                        <label class="list-group-item d-flex gap-2">
                                          <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                          <span>
                                            Viewed
                                          </span>
                                        </label>
                                      </div>
                                      <small class="text-muted">'.$res["video_duration"].'</small>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                    }
                    ?>
                

                        <!-- Video 2 -->
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 2</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">6 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                        <!-- Video 3 -->
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 3</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Medium Videos -->
            <div class="col d-flex align-items-start">
              <div>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse1" aria-expanded="false" >
                  <h4>Medium Videos</h4>
                </button>
                <div class="collapse" id="home-collapse1" >
                  <div class="album py-5 bg-light">
                    <div class="container">
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <!-- Video 1 -->
                        <?php
                    $sql = "SELECT * FROM videos WHERE courseid='".$courseid."' AND video_type = 2";
                    $row = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($row)){
                        echo '<div class="col">
                                <div class="card shadow-sm">
                                  <a href="../videos/course_video.php?'.$res["video_link"].'"><img src="../images/'.$course["course_name"].'"-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                                  <div class="card-body">
                                    <h6>'.$res["video_name"].'</h6>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="list-group mx-0">
                                        <label class="list-group-item d-flex gap-2">
                                          <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                          <span>
                                            Viewed
                                          </span>
                                        </label>
                                      </div>
                                      <small class="text-muted">'.$res["video_duration"].'</small>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                    }
                    ?>
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 1</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">18 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                        <!-- Video 2 -->
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 2</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">15 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                        <!-- Video 3 -->
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 3</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">16 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                      </div>
                      
                    </div>
                  </div>
                </div>
                
              </div>
            </div>

            <!-- Long Videos -->
            <div class="col d-flex align-items-start">
              <div>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse2" aria-expanded="false" >
                  <h4>Long Videos</h4>
                </button>
                <div class="collapse" id="home-collapse2" >
                  <div class="album py-5 bg-light">
                    <div class="container">
                      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <!-- Video 1 -->
                        <?php
                    $sql = "SELECT * FROM videos WHERE courseid='".$courseid."' AND video_type = 3";
                    $row = mysqli_query($con,$sql);
                    while($res = mysqli_fetch_array($row)){
                        echo '<div class="col">
                                <div class="card shadow-sm">
                                  <a href="../videos/course_video.php?'.$res["video_link"].'"><img src="../images/'.$course["course_name"].'"-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                                  <div class="card-body">
                                    <h6>'.$res["video_name"].'</h6>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="list-group mx-0">
                                        <label class="list-group-item d-flex gap-2">
                                          <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                          <span>
                                            Viewed
                                          </span>
                                        </label>
                                      </div>
                                      <small class="text-muted">'.$res["video_duration"].'</small>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                    }
                    ?>
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 1</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">25 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                        <!-- Video 2 -->
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 2</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">29 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                        <!-- Video 3 -->
                        <!-- <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/AJAX_video.php"><img src="../images/AJAX-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>AJAX: Lecture 3</h6>
                              <hr>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="list-group mx-0">
                                  <label class="list-group-item d-flex gap-2">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                                    <span>
                                      Viewed
                                    </span>
                                  </label>
                                </div>
                                <small class="text-muted">49 mins</small>
                              </div>
                            </div>
                          </div>
                        </div> -->

                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <footer></footer>
    </body>