<?php

require "includes/dbconnect.php";

if (isset($_POST['btnlogin']))
{
  $user_login = $_POST['username'];
  $pass_login = md5($_POST['password']);  

  $sql = "SELECT * FROM account WHERE username = '$user_login' and password = '$pass_login'";
  $query = mysqli_query($koneksi, $sql);
  
  if (!$query)
  {
    die("Query gagal".mysqli_error($koneksi));
  }

  while ($row = mysqli_fetch_array($query))
  {
    $user = $row['username'];
    $pass = $row['password'];
    $level = $row['level'];
    $email = $row['email'];
    $status = $row['status'];
  }

  if ($user_login == $user && $level == 3 && $pass_login == $pass && $status == '')
  {
    header("Location:admin/index.php");
    $_SESSION['username'] = $user;
    $_SESSION['level'] = $level;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pass;
  }
  elseif($user_login == $user && $level == 2 && $pass_login == $pass && $status == '') 
  {
    header("Location:cleaner/index.php");
    $_SESSION['username'] = $user;
    $_SESSION['level'] = $level;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pass;
  }
  elseif($user_login == $user && $level == 1 && $pass_login == $pass && $status == '')
  {
    header("Location:user/index.php");
    $_SESSION['username'] = $user;
    $_SESSION['level'] = $level;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pass;
  }
  else
  {
    echo "<div class='alert alert-danger text-center' role='alert'>Username or Password 404</div>";
  }
}
?>  


<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Mipoclean-Login</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/register.css">

</head>
<body>
  <!--header section start -->
    <div class="header_section background_bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
          </div>
          <div class="col-md-9">
            <div class="menu_text">
              <ul>
                <div class="togle_3">
                  <div class="menu_main">
                    <div class="padding_left0"><a href="register.php">Register</a>
                    <span class="padding_left0"><a href="login.php">Login</a></span>
                  </div>
                  </div>
                  <div class="shoping_bag"><img src="images/search-icon.png"></div>
                </div> 
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">Home</a>
                  <a href="services.php">Services</a>
                  <a href="about.php">About</a>
                  <a href="choose.php">Choose</a>
                  <a href="team.php">Team</a>
                  <a href="contact.php">Contact Us</a>
                </div>
                </div>
                <span class="navbar-toggler-icon"></span>
                <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
              </ul>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <!-- header section end -->

    <!-- main section start-->

    <form method="POST" name="tes">
    <div class="wrap">
        
            <img src="./bub/1.png" alt="bub" class="bubble">
            <img src="./bub/3.png" alt="bub" class="bubble3">

            
            <div class="register">
            <div class="tittle">
              Login
            </div>

            <div class="register_name">
                <label for="username" > <h4>Username</h4></label> 
                <input type="username" name="username" id="username" placeholder="Username">
            </div>

            <div class="register_pw">
                <label for="password" > <h4>Password</h4></label> 
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <br>
            <div class="submit">
                <input type="submit" value="LOG-IN" id="submit" name="btnlogin">
            </div>

            <div>
                <br>
            </div>
            
        </div>
    </div>
    </form>
    
    <!-- main section end-->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
         
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
     function openNav() {
     document.getElementById("myNav").style.width = "100%";
    }
     function closeNav() {
     document.getElementById("myNav").style.width = "0%";
    }
    </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>