<?php

    // require_once '../includes/dbconnect.php';

    // if(isset($_POST['send']))
    // {
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $phonenumber = $_POST['phonenumber'];
    // $message = $_POST['message'];

    // $sql = "INSERT INTO contactus (name, email, phonenumber, message) VALUES ('$name', '$email', '$phonenumber', '$message')";
    // $query = mysqli_query($koneksi, $sql);
    // echo "<p class='alert alert-info text-center'><b>Message is being sent!</b></p>";
    // }

    // $koneksi->close();

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
<title>Mipoclean Confirmed Order</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="../css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  <!--header section start -->
  <div class="header_section background_bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="logo"><a href="index.php"><img src="../images/logo.png"></a></div>
          </div>
          <div class="col-md-9">
            <div class="menu_text">
              <ul>
                <div class="togle_3">
                  <div class="menu_main">
                    <div class="padding_left0"><a href="#"></a>
                    <span class="padding_left0"><a type="button" data-toggle="modal" data-target="#exampleModal" href="../index.php">Logout</a></span></div>
                    <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title" id="exampleModalLabel"><center>Reassurance!!! &#128721;</center></h1>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h3><center>Are u sure want to log out &#10071; &#10071; &#10071;</center></h3>
                            </div>
                            <div class="modal-footer">
                              <center>
                              <a type="button" class="btn btn-danger" href="../index.php">Logout</a>
                              <a type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                  
                  </div>
                  <div class="shoping_bag"><img src="../images/search-icon.png"></div>
                </div> 
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">Home</a>
                  <a href="../services.php">Services</a>
                  <a href="../about.php">About</a>
                  <a href="../choose.php">Choose</a>
                  <a href="../team.php">Team</a>
                  <a href="../contact.php">Contact Us</a>
                </div>
                </div>
                <span class="navbar-toggler-icon"></span>
                <span onclick="openNav()"><img src="../images/toggle-icon.png" class="toggle_menu"></span>
              </ul>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <!-- header section end -->

    <!-- main section start-->

    <div class="contact1">
        <div class="row">
            <div class="col">
                <div class="container-contact1">
                    <div class="col">
                        <div class="contact1-pic js-tilt" data-tilt>
                            <center>
                            <img src="images/check.png" alt="Check Image">
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <table>
                            <div class="alert alert-info" role="alert">
                                <h2 class="alert-heading"><center>Well done!</center></h2>
                                <h6>Aww yeah, you successfully request an order for a service. Your services will be proceeded soon. &#128516;</h6>
                                <hr>
                                <hr>
                                <h6 class="mb-0">Please download the waiver down below and fill out the form.</h6>
                            </div>
                            <div class="alert alert-info" role="alert"><center>Download 
                                <a href="../includes/waiver.pdf" download class="alert-link"><u><b><i>waiver</i></b></u></a> right here!.</center>
                            </div>
                            <center><a type="button" class="btn btn-info btn-lg" href="index.php">Go back.</a></center>
                        </table>
                    </div>
		        </div>
	        </div>
        </div>
    </div>

    <!-- main section end -->

    <!-- footer section start -->
    <form action="#" method="POST">
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="footer_main">
            <div class="footer_left">
              <h1 class="contact_taital"><span>Contact </span> <img src="../images/icon-2.png"> <span>Us</span></h1>
            </div>
            <div class="footer_left">
              <div class="location_text"><a href="#"><img src="../images/map-icon.png"><span class="padding_left_15">Current Locations</span></a></div>
            </div>
            <div class="footer_left">
              <div class="location_text"><a href="#"><img src="../images/call-icon.png"><span class="padding_left_15" href="wa.me/+6281260588705">+6281260588705</span></a></div>
            </div>
            <div class="footer_left">
              <div class="location_text"><a href="#"><img src="../images/map-icon.png"><span class="padding_left_15">mipoclean@gmail.com</span></a></div>
            </div>
          </div>
          <div class="contact_section">
            <div class="row">
              <div class="col-md-6">
                <div class="mail_section">
                  <input type="" class="email_text" placeholder="Name" name="name">
                  <input type="" class="email_text" placeholder="Email" name="email">
                  <input type="" class="email_text" placeholder="Phone Number" name="phonenumber">
                  <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="message"></textarea>
                  <div class="send_bt"><button type="submit" class="btn btn-info" name="send">SEND</button></button></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="map_main">
                  <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><img src="../images/fb-icon1.png"></a></li>
                    <li><a href="#"><img src="../images/twitter-icon1.png"></a></li>
                    <li><a href="#"><img src="../images/linkden-icon1.png"></a></li>
                    <li><a href="#"><img src="../images/instagram-icon1.png"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- footer section end -->
    
    
    <!-- Javascript files-->

  <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.0.0.min.js"></script>
    <script src="../js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/custom.js"></script>
    <!-- javascript --> 
    <script src="../js/owl.carousel.js"></script>
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
</body>
</html>