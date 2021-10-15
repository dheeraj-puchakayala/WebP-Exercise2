<head>
    <script>
        let cook = decodeURIComponent(document.cookie)
        var x = document.getElementById("0");
        var y = document.getElementById("1");
        if (cook[cook.length - 1] == "1") {
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
            document.location = "../index.html"
        }
    </script>
    <script>
        function checkLoggedIn() {
            let cook = decodeURIComponent(document.cookie)
            if (cook[cook.length - 1] == "1") {
                return true;
            }
            else{
                document.location = "/WebCoursera/login.html"
                return false;
            }
        }
    </script>
</head>


<header id ="0" class="p-3 bg-light text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-lg-start mb-md-0">
                <li><a href="index.html" class="nav-link px-2 text-info"><h2 style="font-family: 'Source Sans Pro', sans-serif;" >WebCoursera</h2></a></li>
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
                        <li><a class="dropdown-item " href="../courses/HTML.html" onclick="return checkLoggedIn();">HTML</a></li>
                        <li><a class="dropdown-item" href="../courses/CSS.html" onclick="return checkLoggedIn();">CSS</a></li>
                        <li><a class="dropdown-item" href="../courses/JAVASCRIPT.html" onclick="return checkLoggedIn();">JAVASCRIPT</a></li>
                        <li><a class="dropdown-item" href="../courses/JAVA.html" onclick="return checkLoggedIn();">JAVA</a></li>
                        <li><a class="dropdown-item" href="../courses/AJAX.html" onclick="return checkLoggedIn();">AJAX</a></li>
                        <li><a class="dropdown-item" href="../courses/PYTHON.html" onclick="return checkLoggedIn();">PYTHON</a></li>

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
                <a class="btn btn-outline-dark me-2" href="../login.html" role="button"><i class="bi bi-person-circle fa-lg"></i>  Login</a>
                <a class="btn btn-outline-info" href="../signup.html" role="button"><i class="bi bi-person-plus fa-lg"></i>  SignUp</a>
            </div>
        </div>
    </div>

</header>





<header id = "1" class="p-3 bg-light text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-lg-start justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-lg-start mb-md-0">
                <li><a href="../index.html" class="nav-link px-2 text-info"><h2 style="font-family: 'Source Sans Pro', sans-serif;" >WebCoursera</h2></a></li>
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
                            <li><a class="dropdown-item " href="../courses/HTML.html" onclick="return checkLoggedIn();">HTML</a></li>
                            <li><a class="dropdown-item" href="../courses/CSS.html" onclick="return checkLoggedIn();">CSS</a></li>
                            <li><a class="dropdown-item" href="../courses/JAVASCRIPT.html" onclick="return checkLoggedIn();">JAVASCRIPT</a></li>
                            <li><a class="dropdown-item" href="../courses/JAVA.html" onclick="return checkLoggedIn();">JAVA</a></li>
                            <li><a class="dropdown-item" href="../courses/AJAX.html" onclick="return checkLoggedIn();">AJAX</a></li>
                            <li><a class="dropdown-item" href="../courses/PYTHON.html" onclick="return checkLoggedIn();">PYTHON</a></li>

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
                <a class="btn btn-outline-dark me-2" href ="../profile.html"><i class="bi bi-person-circle fa-lg"></i>  User Name</a>
                <a class="btn btn-outline-danger" href="../index.html" role="button" onclick="logout()"><i class="bi bi-person-x fa-lg"></i>  Logout</a>
            </div>
        </div>
    </div>

</header>




              


