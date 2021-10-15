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
            <h1 class="display-5 fw-bold"><img src="../images/python.png" style="height: 180px; width: 180px;"> Python</h1>
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
                <h4>Python for Data Analysis: Data Wrangling with Pandas, NumPy, and IPython</h4>
                <ul>
                  <li>Author:<em>Wes McKinney</em></li>
                  <li>Edition:<em>2nd edition</em></li>
                  <li>Publication:<em>O'Reilly</em></li>
                </ul>
              </div>
            </div>
            <div class="col d-flex align-items-start">
              <div>
                <h4>Programming Python: Python for Everybody using Python 3</h4>
                <ul>
                  <li>Author:<em>Mark Lutz</em></li>
                  <li>Edition:<em>3rd edition</em></li>
                  <li>Publication:<em>O'Reilly</em></li>
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
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 1</h6>
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
                                <small class="text-muted">7 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 2</h6>
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
                                <small class="text-muted">8 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 3</h6>
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
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 1</h6>
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

                        <!-- Video 2 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 2</h6>
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
                        </div>

                        <!-- Video 3 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 3</h6>
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
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 1</h6>
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
                                <small class="text-muted">22 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 2 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 2</h6>
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
                                <small class="text-muted">27 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Video 3 -->
                        <div class="col">
                          <div class="card shadow-sm">
                            <a href="../videos/PYTHON_video.php"><img src="../images/PYTHON-Tutorials.png" width="100%" height ="50%" class="rounded"></a>
                            <div class="card-body">
                              <h6>Python: Lecture 3</h6>
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
                                <small class="text-muted">30 mins</small>
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