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


    </head>
    <body>
        <header class="p-3 bg-light text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-lg-start">

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-lg-start mb-md-0">
                        <li><a href="../index.php" class="nav-link px-2 text-info"><h2 style="font-family: 'Source Sans Pro', sans-serif;" >WebCoursera</h2></a></li>
                        <li>
                            <div style="width: 25px;"></div>
                        </li>
                        <li>
                            <div class="dropdown">
                                
                                <button class="btn btn-info dropdown-toggle" style="color:whitesmoke; margin-top: 10px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-menu-button-wide fa-lg"></i>
                                    Categories
                                </button>

                                <ul class="dropdown-menu dropdown-menu-macos mx-0 shadow" style="width: 220px;">
                                    <li><a class="dropdown-item " href="../courses/HTML.php">HTML</a></li>
                                    <li><a class="dropdown-item" href="../courses/CSS.php">CSS</a></li>
                                    <li><a class="dropdown-item" href="../courses/JAVASCRIPT.php">JAVASCRIPT</a></li>
                                    <li><a class="dropdown-item" href="../courses/JAVA.php">JAVA</a></li>
                                    <li><a class="dropdown-item" href="../courses/AJAX.php">AJAX</a></li>
                                    <li><a class="dropdown-item" href="../courses/PYTHON.php">PYTHON</a></li>

                                </ul>
                            </div>

                        </li>
                    </ul>

                    <div class="input-group w-25">
                        <span class="input-group-text" style="padding: 0px; border-radius: 5px;" id="basic-addon1">
                            <button type="submit" class="btn"><i class="bi bi-search fa-lg" style="color:#5bc0de"></i></button>  
                            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                        </span>
                    </div>

                    <div style="width: 25px;"></div>

                    <div class="text-end">
                        <a class="btn btn-outline-dark me-2" ><i class="bi bi-person-circle fa-lg"></i>  User Name</a>
                        <a class="btn btn-outline-danger" href="../index.php" role="button"><i class="bi bi-person-x fa-lg"></i>  Logout</a>
                    </div>
                </div>
            </div>

        </header>
    </body>
</html>


              


