<?php
session_start();
?>
<head>

    <script>
        let cook = <?php echo (isset($_SESSION['id']))?$_SESSION['id']:"0"; ?>;
        var x = document.getElementById("0");
        var y = document.getElementById("1");
        console.log(cook);
        if (cook != "0") {
            y.style.display = "block"
            x.style.display = "none"
        }
        else{
            x.style.display = "block"
            y.style.display = "none"
        }
    </script>
    <script>
        function logout(){
            let name = "session"
            document.cookie = name +'=0; Path=/;'
            alert("Successfully Logged out")
            document.location = "index.php"
        }
    </script>
    <script>
        function checkLoggedIn() {
            let cook = <?php echo (isset($_SESSION['id']))?$_SESSION['id']:"0"; ?>;
            if (cook != "0") {
                return true;
            }
            else{
                document.location = "login.php"
                return false;
            }
        }
    </script>
    <script>
        function search_suggest(str){
            if (str.length==0) {
                document.getElementById("suggest1").innerHTML="";
                document.getElementById("suggest1").style.border="0px";
                document.getElementById("suggest").innerHTML="";
                document.getElementById("suggest").style.border="0px";
                return;
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                document.getElementById("suggest1").innerHTML=this.responseText;
                document.getElementById("suggest").innerHTML=this.responseText;
                console.log(this.responseText);
                document.getElementById("suggest1").style.border="1px solid #A5ACB2";
                document.getElementById("suggest").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","<?php echo $_SESSION['ROOT_FOLDER']?>search.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
    <!-- <script>
                $(document).ready(function() {
        $("[list='suggest1']").on("input propertychange", function() {
            window.location = $("#suggest1 option[value='"+$("[list='suggest1']").val()+"']").find("a").attr("href")
        });
        });
    </script> -->
    <script>
        function redirect(){
            let str = document.getElementById("value").value;
            if(str == "terms"|| str=="about" || str=="help" || str=="policy" || str=="contact"){
                window.location="//localhost/WebCoursera/footer_pages/"+str+".php";
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    let val = this.responseText;
                    console.log(val);
                    window.location = "//localhost/WebCoursera/courses/course_page.php?course_id=" + val;
                }
            }
            xmlhttp.open("GET","<?php echo $_SESSION['ROOT_FOLDER']?>get_cid.php?name="+str,true);
            xmlhttp.send();
        }
    </script>
    <script>
        function redirect1(){
            let str = document.getElementById("value1").value;
            if(str == "terms"|| str=="about" || str=="help" || str=="policy" || str=="contact"){
                window.location="//localhost/WebCoursera/footer_pages/"+str+".php";
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    let val = this.responseText;
                    console.log(val);
                    window.location = "//localhost/WebCoursera/courses/course_page.php?course_id=" + val;
                }
            }
            xmlhttp.open("GET","<?php echo $_SESSION['ROOT_FOLDER']?>get_cid.php?name="+str,true);
            xmlhttp.send();
        }
    </script>

</head>


<header id ="0" class="p-3 bg-light text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-lg-start mb-md-0">
                <li><a href="/WebCoursera/index.php" class="nav-link px-2 text-info"><h2 style="font-family: 'Source Sans Pro', sans-serif;" >WebCoursera</h2></a></li>
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
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=1" onclick="return checkLoggedIn();">HTML</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=2" onclick="return checkLoggedIn();">CSS</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=3" onclick="return checkLoggedIn();">JAVASCRIPT</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=6" onclick="return checkLoggedIn();">JAVA</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=4" onclick="return checkLoggedIn();">AJAX</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=5" onclick="return checkLoggedIn();">PYTHON</a></li>

                        </ul>
                    </div>

                </li>
            </ul>

            <span class="input-group-text" style="padding: 5px; border-radius: 5px;">
            <datalist id="suggest">
            </datalist>
            <input style="border-width:0px; background-color:#edebeb;" id="value1" autoComplete="on" name="suggest" list="suggest1" placeholder="Search...." onkeyup=search_suggest(this.value)>
            <button type="submit" class="btn"><i class="bi bi-search fa-lg" style="color:#5bc0de" onclick="redirect1()"></i></button>
            </span>

            <div style="width: 25px;"></div>

            <div class="text-end">
                <a class="btn btn-outline-dark me-2" href="<?php echo $_SESSION['ROOT_FOLDER']?>login.php" role="button"><i class="bi bi-person-circle fa-lg"></i>  Login</a>
                <a class="btn btn-outline-info" href="<?php echo $_SESSION['ROOT_FOLDER']?>signup.php" role="button"><i class="bi bi-person-plus fa-lg"></i>  SignUp</a>
            </div>
        </div>
    </div>

</header>





<header id = "1" class="p-3 bg-light text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-lg-start mb-md-0">
                <li><a href="<?php echo $_SESSION['ROOT_FOLDER']?>index.php" class="nav-link px-2 text-info"><h2 style="font-family: 'Source Sans Pro', sans-serif;" >WebCoursera</h2></a></li>
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
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=1" onclick="return checkLoggedIn();">HTML</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=2" onclick="return checkLoggedIn();">CSS</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=3" onclick="return checkLoggedIn();">JAVASCRIPT</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=6" onclick="return checkLoggedIn();">JAVA</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=4" onclick="return checkLoggedIn();">AJAX</a></li>
                        <li><a class="dropdown-item" href="<?php  echo $_SESSION['ROOT_FOLDER']?>courses/course_page.php?course_id=5" onclick="return checkLoggedIn();">PYTHON</a></li>

                        </ul>
                    </div>

                </li>
            </ul>

            <!-- <div class="input-group w-25">
                <span class="input-group-text" style="padding: 0px; border-radius: 5px;" id="basic-addon1">
                    <button type="submit" class="btn"><i class="bi bi-search fa-lg" style="color:#5bc0de"></i></button>  
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" onkeyup=search_suggest(this.value)>
                </span>
                <div id = "suggest1" class="autocom-box"></div>
            </div> -->
            <span class="input-group-text" style="padding: 5px; border-radius: 5px;">
            <datalist id="suggest1">
            </datalist>
            <input style="border-width:0px; background-color:#edebeb;" id="value" autoComplete="on" name="suggest1" list="suggest1" placeholder="Search...." onkeyup=search_suggest(this.value)>
            <button type="submit" class="btn"><i class="bi bi-search fa-lg" style="color:#5bc0de" onclick="redirect()"></i></button>
            </span>
            
            <div style="width: 25px;"></div>

            <div class="text-end">
                <?php
                    $con = mysqli_connect('127.0.0.1:3306','root','','webcoursera') or die('Unable To connect');
                    $sql = "SELECT name FROM users WHERE userid='".$_SESSION["id"]."'";
                    $row = mysqli_query($con,$sql);
                    $res = mysqli_fetch_array($row);
                ?>
                <a class="btn btn-outline-dark me-2" href ="<?php echo $_SESSION['ROOT_FOLDER']?>profile.php"><i class="bi bi-person-circle fa-lg"></i><?php echo "   ".$res[0]; ?></a>
                <a class="btn btn-outline-danger" href="<?php echo $_SESSION['ROOT_FOLDER']?>logout.php" role="button" ><i class="bi bi-person-x fa-lg"></i>  Logout</a>
            </div>
        </div>
    </div>

</header>




              


