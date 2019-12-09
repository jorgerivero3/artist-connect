<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Mason and Jorge">

  <title>Artist Connect - home</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom styles for this template -->
 <link href="./css/all.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">

  <?php
  session_start(); 
  //connection to database
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'cs329e_mitra_mmooring';
  $DATABASE_PASS = 'banal5Fix3Soon';
  $DATABASE_NAME = 'cs329e_mitra_mmooring';
  // Try and connect using the info above.
  $con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if ( $con->connect_error ) {
    // If there is an error with the connection, stop the script and display the error.
  die ('Failed to connect to MySQL: ' . $con->connect_error);
}
  $username = $_SESSION['username'];
  $photo = "SELECT imagePath, name FROM accounts WHERE username='$username'";
  $result = mysqli_query($con, $photo);
  $r = mysqli_fetch_array($result);

?>
 
  

  
<!--   <script defer src="./js/all.js"></script> -->

</head>

<body class="home">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php">Artist Connect</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <?php  if (isset($_SESSION['username'])) : ?>
            <a class="nav-link" href="./profile.php">Profile</a>
            <?php endif ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./venues.php">Venues</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./bands.php">Bands</a>
          </li>
		  <li class="nav-item">
        <?php  if (isset($_SESSION['username'])) : ?>
            <a href="./logout.php" class="btn btn-primary">Logout</a>
        <?php else : ?>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLRForm">Login</a>
        <?php endif ?>
		  </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Carousel -->
    <div id="bands" class="carousel slide pb-5" data-ride="carousel" data-interval="3000">
      <ol class="carousel-indicators">
        <li data-target="#bands" data-slide-to="0" class="active"></li>
        <li data-target="#bands" data-slide-to="1"></li>
        <li data-target="#bands" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="overlay"></div>
          <img class="d-block w-100" src="./img/band1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
                <h1>Artist Connect</h1>
                <h3>Empowering local artists to find their audience.</h3>
                <div class="arrow_div pt-5">
                  <p>Scroll down</p>
                  <i class="fas fa-angle-down"></i>
                </div>
                
            </div>
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="overlay"></div>
          <img class="d-block w-100" src="./img/main2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <div class="main-text">
                <h1>Made For Musicians</h1>
                <h3>Let your sound be heard</h3>
              </div>
                <div class="arrow_div pt-5">
                  <p>Scroll down</p>
                  <i class="fas fa-angle-down"></i>
                </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="overlay"></div>
          <img class="d-block w-100" src="./img/main3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
                <h1>Great For Venues</h1>
                <h3>Bring in more customers with great local acts.</h3>
                <div class="arrow_div pt-5">
                  <p>Scroll down</p>
                  <i class="fas fa-angle-down"></i>
                </div>
            </div>
          </div>

      </div>
      <a class="carousel-control-prev" href="#bands" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#bands" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>


  <!-- Page Content -->
  <div class="container-fluid w-full">

    <!-- Company Info -->
    <div class="row justify-content-start ml-5 pb-5 mt-5">
      <div class="col-md-8 ml-2 mb-5">
        <h1>Get Discovered</h1>
        <h3 class="pt-5">We help artists get discovered by showcasing your art to live venues. They can easily view through our catalog.</h3>
      </div>
    </div>

    <div class="row justify-content-end mr-5 mt-5 ">
      <div class=" mb-5 text-right">
        <h1>Increase Patronage</h1>
        <h3 class="pt-5">Draw in crowds with a variety of local artists.</h3>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="mb-5 text-center">
        <h3>Join the connection</h3>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLRForm">Sign Up &raquo;</a>
      </div>
    </div>
    <!-- /.row -->

   <!--  <div class="row">
    <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong>Start Bootstrap</strong>
          <br>3481 Melrose Place
          <br>Beverly Hills, CA 90210
          <br>
        </address>
        <address>
          <abbr title="Phone">P:</abbr>
          (123) 456-7890
          <br>
          <abbr title="Email">E:</abbr>
          <a href="mailto:#">name@example.com</a>
        </address>
      </div>
    </div> -->

    <!-- /.row -->

  </div>

  <!-- AJAX login script -->
  <script>
    function userTaken(str){
      if (str.length === 0){
        return;
      } else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            if (!(this.responseText === "")){
              alert(this.responseText);
            }
          }
        };

        xmlhttp.open("GET", "user_check.php?q=" + str, true);
        xmlhttp.send();
      }
    }
  </script>

  <!--Modal: Login / Register Form-->
  <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                Register</a>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

              <!--Body-->
    			<form action = "./authenticate.php" method="post" name="loginForm" id="login_form">
                <div class="modal-body mb-1">
                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input name="username" id="username" class="form-control form-control-sm validate">
                    <label data-error="wrong" data-success="right" for="username">Your username</label>
                  </div>

                  <div class="md-form form-sm mb-4">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" name="password" id="password" class="form-control form-control-sm validate">
                    <label data-error="wrong" data-success="right" for="password">Your password</label>
                  </div>
    			  </form>
                  <div class="text-center mt-2">
                    <button class="btn btn-info" onclick="submit_login()">Log in <i class="fas fa-sign-in ml-1"></i></button>
                  </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                  <div class="options text-center text-md-right mt-1">
                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                    <p><a href="#" class="blue-text">Forgot Password?</a></p>
                  </div>
                  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                </div>

              </div>
              <!--/.Panel 7-->

              <!--Panel 8-->
              <div class="tab-pane fade" id="panel8" role="tabpanel">

                <!--Body-->
                <div class="modal-body">
    			<form action = "./register.php" method="post" name="registerForm" id="register_form">
                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input id="reg_username" name="reg_username" class="form-control form-control-sm validate" onkeyup="userTaken(this.value)">
                    <label data-error="wrong" data-success="right" for="reg_username">Your username</label>
                  </div>

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="reg_password_1" name="reg_password_1" class="form-control form-control-sm validate">
                    <label data-error="wrong" data-success="right" for="reg_password_1">Your password</label>
                  </div>

                  <div class="md-form form-sm mb-4">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="reg_password_2" name="reg_password_2" class="form-control form-control-sm validate">
                    <label data-error="wrong" data-success="right" for="reg_password_2">Repeat password</label>
                  </div>
    			</form>
                  <div class="text-center form-sm mt-2">
                    <button class="btn btn-info" onclick="submit_register()">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                  </div>

                </div>
                <!--Footer-->
                <div class="modal-footer">
                  <div class="options text-right">
                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                  </div>
                  <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
            <!--/.Panel 8-->
          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
</div>
<script>
function submit_login() {
	document.getElementById("login_form").submit();
}

function submit_register() {
	document.getElementById("register_form").submit();
}
</script>
<!--Modal: Login / Register Form-->
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Artist Connect 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
 

</body>

</html>