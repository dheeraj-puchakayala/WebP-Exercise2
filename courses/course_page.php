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
            <h1 class="display-5 fw-bold"><img src=<?php echo $course["course_img"]?> style="width: 180px; height: 180px;"> <?php echo $course["course_name"];?></h1>
             <?php 
              $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect'); 
              $sql = "SELECT COUNT(*) FROM course_reg WHERE courseid='".$courseid."' AND userid='".$_SESSION["id"]."'";
              $row = mysqli_query($con,$sql);
              $register = mysqli_fetch_array($row);
              // echo($register[0]);
              if($register[0]== 0){
                echo '<button class="btn btn-info btn-lg" type="button" onclick="register();">Register for this Course</button>';
              }
              else{
                echo '<p class="col-md-8 fs-4" style = "margin-top: 30px;">Check Your Progress</p>
                <div class="progress" style="margin-top: 20px; height: 30px">
                  <div class="progress-bar bg-info" id="progress" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>';
              }
            ?>

          </div>
        </div>

        <!-- Registered for course -->
        <?php
          if($register[0]==1){
            echo '<div class="container px-4 py-5">
            <h2 class="pb-2 border-bottom">References</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-1">';
          
          // References
          $sql = "SELECT * FROM course_ref WHERE courseid ='".$courseid."'";
          $row = mysqli_query($con,$sql);
          while($res = mysqli_fetch_array($row)){
            echo '<div class="col d-flex align-items-start">
            <div>
              <h4>'.$res["ref_name"].'</h4>
              <ul>
                <li>Author:<em>'.$res["author"].'</em></li>
                <li>Edition:<em>'.$res["edition"].'</em></li>
                <li>Publication:<em>'.$res["publication"].'</em></li>
              </ul>
            </div>
          </div>';
          }

          // Video Lectures
          echo '</div>
            </div>';
          echo '
          <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">Video Lectures</h2>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-1">
            <div class="col d-flex align-items-start">
              <div>
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse0" aria-expanded="false" >
                  <h4>Short Videos</h4>
                </button>
                <div class="collapse" id="home-collapse0" >
                        <div class="album py-5 bg-light">
                          <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">';
                            $sql = "SELECT * FROM videos WHERE courseid='".$courseid."' AND video_type = 1";
                            $row = mysqli_query($con,$sql);
                            while($res = mysqli_fetch_array($row)){
                                echo '<div class="col">
                                        <div class="card shadow-sm">
                                          <a href="../videos/course_video.php?cid='.$courseid.'&vid='.$res["video_id"].'"><img src="../images/'.$course["course_name"].'-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                                          <div class="card-body">
                                            <h6>'.$res["video_name"].'</h6>
                                            <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <div class="list-group mx-0">
                                                <label class="list-group-item d-flex gap-2">
                                                  <input class="form-check-input flex-shrink-0" type="checkbox" id="vid'.$res["video_id"].'" value="'.$res["video_id"].'" onclick="vid_list(this.value)">
                                                  <span>
                                                    Viewed
                                                  </span>
                                                </label>
                                              </div>
                                              <small class="text-muted">'.$res["video_duration"].' mins</small>
                                            </div>
                                          </div>
                                        </div>
                                      </div>';
                            }
                              echo '</div>
                                          
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>';

                      echo '<div class="col d-flex align-items-start">
                      <div>
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse1" aria-expanded="false" >
                          <h4>Medium Videos</h4>
                        </button>
                        <div class="collapse" id="home-collapse1" >
                          <div class="album py-5 bg-light">
                            <div class="container">
                              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
                              $sql = "SELECT * FROM videos WHERE courseid='".$courseid."' AND video_type = 2";
                              $row = mysqli_query($con,$sql);
                            while($res = mysqli_fetch_array($row)){
                              echo '<div class="col">
                                <div class="card shadow-sm">
                                  <a href="../videos/course_video.php?cid='.$courseid.'&vid='.$res["video_id"].'"><img src="../images/'.$course["course_name"].'-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                                  <div class="card-body">
                                    <h6>'.$res["video_name"].'</h6>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="list-group mx-0">
                                        <label class="list-group-item d-flex gap-2">
                                          <input class="form-check-input flex-shrink-0" type="checkbox" id="vid'.$res["video_id"].'" value="'.$res["video_id"].'" onclick="vid_list(this.value)">
                                          <span>
                                            Viewed
                                          </span>
                                        </label>
                                      </div>
                                      <small class="text-muted">'.$res["video_duration"].' mins</small>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                            }
                              echo '</div>
                      
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>';

                      echo '<div class="col d-flex align-items-start">
                      <div>
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse2" aria-expanded="false" >
                          <h4>Long Videos</h4>
                        </button>
                        <div class="collapse" id="home-collapse2" >
                          <div class="album py-5 bg-light">
                            <div class="container">
                              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
                              $sql = "SELECT * FROM videos WHERE courseid='".$courseid."' AND video_type = 3";
                              $row = mysqli_query($con,$sql);
                              while($res = mysqli_fetch_array($row)){
                              echo '<div class="col">
                                <div class="card shadow-sm">
                                  <a href="../videos/course_video.php?cid='.$courseid.'&vid='.$res["video_id"].'"><img src="../images/'.$course["course_name"].'-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                                  <div class="card-body">
                                    <h6>'.$res["video_name"].'</h6>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="list-group mx-0">
                                        <label class="list-group-item d-flex gap-2">
                                          <input class="form-check-input flex-shrink-0" type="checkbox" id="vid'.$res["video_id"].'"value="'.$res["video_id"].'" onclick="vid_list(this.value)">
                                          <span>
                                            Viewed
                                          </span>
                                        </label>
                                      </div>
                                      <small class="text-muted">'.$res["video_duration"].' mins</small>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                    }
                    echo '</div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-info btn-lg" type="button" onclick="complete_course();">Complete Course</button>
        </div>';

        // echo ;

        }

        else{
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

          // Video Lectures
          echo '</ul>
          </div>
        </div>
          </div>
            </div>';
        }

        ?>


        <script>
          var register= function(){
            var xmlhttp=new XMLHttpRequest();
            var cid = <?php echo $courseid;?>;
            var uid = <?php echo $_SESSION["id"];?>;
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  
                  
                  location.reload();
                }
            }
            xmlhttp.open("GET","<?php echo $_SESSION['ROOT_FOLDER']?>/courses/course_reg.php?cid="+cid+"&uid="+uid,true);
            xmlhttp.send();
              
          }
        </script>
        <script>
          <?php
            $sql = "SELECT viewed_videos FROM `course_reg` WHERE courseid='".$courseid."' and userid='".$_SESSION["id"]."'";
            $row = mysqli_query($con,$sql);
            $res = mysqli_fetch_array($row);
            ?>
          
          var pbar = function() {
            if(vlist.size > 0){
            let num_vids = <?php echo $course["total_videos"];?>;
            let progress = Math.floor((vlist.size/num_vids) * 100);
            document.getElementById("progress").innerHTML = progress+"%";
            document.getElementById("progress").style.width = progress+"%";
            }
            else{
              document.getElementById("progress").innerHTML = "0%";
              document.getElementById("progress").style.width = "0%";
            }
            
          }

          var vlist = "<?php echo $res[0];?>"
          if(vlist != "") {

            vlist = vlist.split(",");
            console.log(vlist);
            
            for(var i=0; i<vlist.length; i++) {
                document.getElementById("vid"+vlist[i]).checked = true;
            }
            vlist = new Set(vlist);
          }
          else{
            vlist = new Set();
          }
          pbar();
          
          
          var vid_list = function(val) {
            if(!vlist.has(val)) {
              //insert
              vlist.add(val)
            } else {
              //delete
              vlist.delete(val)
            } 
            
            // convert Set to String
            let viewed = '';
            vlist.forEach(function (elem) {
                viewed += elem + ",";
            });
            viewed = viewed.slice(0, -1);
            console.log(viewed);
            
            //ajax call  
            var xmlhttp=new XMLHttpRequest(); 
            var cid = <?php echo $courseid;?>;
            var uid = <?php echo $_SESSION["id"];?>;         
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  
                  pbar();
                }
            }
            xmlhttp.open("GET","<?php echo $_SESSION['ROOT_FOLDER']?>/courses/update_vid.php?view="+viewed+"&cid="+cid+"&uid="+uid,true);
            xmlhttp.send();
          }
        </script>

        <script>
          var complete_course = function () {
            if(document.getElementById("progress").innerHTML == "100%"){
              var xmlhttp=new XMLHttpRequest();
              var cid = <?php echo $courseid;?>;
              var uid = <?php echo $_SESSION["id"];?>;
              xmlhttp.onreadystatechange=function() {
                  if (this.readyState==4 && this.status==200) {
                    location.reload();

                  }
              }
              xmlhttp.open("GET","<?php echo $_SESSION['ROOT_FOLDER']?>/courses/course_dereg.php?cid="+cid+"&uid="+uid,true);
              xmlhttp.send();
            } else {
              alert('Course not completed')
            }
          }
        </script>

                      


        <footer></footer>
    </body>