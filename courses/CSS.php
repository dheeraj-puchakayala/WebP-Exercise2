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
          $(function(){ $("head").load("../templates/links.php") });
        </script>
        <script> 
          $(function(){ $("header").load("../templates/header.php") });
        </script>
        <script> 
          $(function(){ $("footer").load("../templates/footer.php") });
        </script>

    
    </head>
    <body>
        <header></header>

        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"><img src="../images/css.png" style="width: 180px; height: 180px;"> Cascading Style Sheets</h1>
            <p class="col-md-8 fs-4" style = "margin-top: 30px;">Check Your Progress</p>
            <div class="progress" style="margin-top: 20px; height: 30px">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
            <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
          </div>
        </div>


        <!-- References -->
        <div class="container px-4 py-5">
          <h2 class="pb-2 border-bottom">References</h2>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-1">
            <div class="col d-flex align-items-start">
              <div>
                <h4>CSS: Design and Build Websites</h4>
                <ul>
                  <li>Author:<em>Jon Duckett</em></li>
                  <li>Edition:<em>2nd edition</em></li>
                  <li>Publication:<em>Pearson</em></li>
                </ul>
              </div>
            </div>
            <div class="col d-flex align-items-start">
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
        </div>

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
                        <!-- Video 1 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 1</h6>
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
                        </div>

                        <!-- Video 2 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 2</h6>
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
                                <small class="text-muted">5 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 3</h6>
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
                        </div>

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
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 1</h6>
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
                                <small class="text-muted">19 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 2</h6>
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
                                <small class="text-muted">12 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 3</h6>
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
                                <small class="text-muted">14 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

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
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 1</h6>
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
                                <small class="text-muted">35 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 2</h6>
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
                                <small class="text-muted">40 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/CSS_video.php"><img src="../images/CSS-Tutorial.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>CSS: Lecture 3</h6>
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
                                <small class="text-muted">38 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

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