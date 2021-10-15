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
          <h1 class="display-5 fw-bold"><img src="../images/java.png" height= "180px" width= "180px"> JAVA</h1>
          <h4 class="display-6 fw-bold" style = "margin-top: 30px;">JAVA: Lecture 1</h4>
        </div>
      </div>

      <div class="row" style="margin-left: 100px; margin-right: 50px; height:56.25%">
        <div style="width: 70%;">
            <div class="row" style="height: 100%;">
                  <iframe  src="https://www.youtube.com/embed/ntLJmHOJ0ME?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div style="width: 30%;"> 
            <div class="row" style="height: 100%;" >
                  <h2>Notes</h2> 
                  <div class="input-group" style="height: 70%;">
                    <textarea style="resize:none;" rows="8" class="form-control form-control-lg" aria-label="With textarea"></textarea>
                    
                  </div>
                  <a class="btn btn-outline-dark me-2" href="#" role="button" style="margin-top: 8%; height:10%;">Save Notes</a>
            </div>
        </div> 
      
      </div>

      <footer></footer>
    </body>
</html>

