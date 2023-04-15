<?php

    require_once 'includes/dbconnect.php';

    if(isset($_POST['send']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactus (name, email, phonenumber, message) VALUES ('$name', '$email', '$phonenumber', '$message')";
    $query = mysqli_query($koneksi, $sql);
    echo "<p class='alert alert-info text-center'><b>Message is being sent!</b></p>";
    }

    $koneksi->close();

?>  

<?php

session_destroy();

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
<title>Mipoclean</title>
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
</head>
<body>
  <!--header section start -->
    <div class="header_section">
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
                    <span class="padding_left0"><a href="login.php">Login</a></span></div>
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
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <h1 class="banner_taital">MIPO</h1> 
            <h1 class="banner_taital_1">HOUSE CLEAN</h1>
            <p class="banner_text">Professional house clean in the world. Your house clean is our priority.</p>
            <div class="contact_bt"><a href="contact.php">CONTACT US<span class="contact_padding"><img src="images/contact-icon.png"></span></a></div>
          </div>
          <div class="col-sm-2">
            <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
          </div>
          <div class="col-sm-5">
            <div><img src="images/img-1.png" class="image_1"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
      <div class="container">
        <h1 class="services_taital"><span>Our</span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Services</span></h1>
        <p class="services_text">Cleanliness plays a large role in the comfort of your home, so this is the services that we offer</p>
        <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <div class="tiles_img"></div>
                      <h3 class="tile_text active">Tile & Grout</h3>
                      <p class="lorem_text active">We are expertly trained to clean your hard surfaces floors and walls quickly and efficiently cleaning your tile and grout.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      <div class="tiles_img_1"></div>
                      <h3 class="tile_text">Carpet Cleaning</h3>
                      <p class="lorem_text">We perform pre-cleaning inspections, apply treatments, and remove stains using hand and machine cleaning tools.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <div class="tiles_img"></div>
                      <h3 class="tile_text active">Bathroom</h3>
                      <p class="lorem_text active">Our cleaning services can help you maintain a pristine washroom from top to bottom.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      <div class="tiles_img_1"></div>
                      <h3 class="tile_text">Kitchen</h3>
                      <p class="lorem_text">We'll tackle your kitchen, with our deep cleaning services that detail your space.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <div class="tiles_img"></div>
                      <h3 class="tile_text active">Tile & Grout</h3>
                      <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      <div class="tiles_img_1"></div>
                      <h3 class="tile_text">Carpet Cleaning</h3>
                      <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- services section start -->
    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div><img src="images/img-2.png" class="image_2"></div>
          </div>
          <div class="col-md-6">
            <h1 class="services_taital"><span>About </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Cleaning</span></h1>
            <p class="ipsum_text">Cleaning eliminates germs along with dirt and dust, resulting in better indoor air quality, leaving a whiff of freshness in its wake. The kitchen and bathroom usually require special attention, as they are known to be one of the germiest places in any house
            Another good reason to keep your home neat and orderly is the possibility of tripping, or residents accidentally hurting themselves if there’s too much random stuff lying around the house. This is especially dangerous for kids.
            </p>
            <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img src="images/contact-icon1.png"></span></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- about section end -->
    <!-- choose section start -->
    <div class="choose_section layout_padding">
      <div class="container">
        <h1 class="choose_taital"><span>Why </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Choose Us</span></h1>
        <p class="choose_text">We over 22 years, to keeping your home clean and comfortable.</p>
        <div class="choose_section_2 layout_padding">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="choose_box">
                <h1 class="client_taital">17080+</h1>
                <h4 class="client_text">Our clients</h4>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="choose_box">
                <h1 class="client_taital">19610+</h1>
                <h4 class="client_text">Happy clients</h4>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="choose_box">
                <h1 class="client_taital">18804+</h1>
                <h4 class="client_text">Supports</h4>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="choose_box">
                <h1 class="client_taital">61+</h1>
                <h4 class="client_text">Awards</h4>
              </div>
            </div>
          </div>
          <div class="image_3"><img src="images/img-3.png"></div>
          <div class="get_bt"><a href="#">Get A quote</a></div>
        </div>
      </div>
    </div>
    <!-- choose section end -->
    <!-- team section start -->
    <div class="team_section layout_padding">
      <div class="container">
        <h1 class="choose_taital"><span>Our </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Team</span></h1>
        <p class="choose_text">Our team consist of lotta expert, so you do'nt need to worry about absolutely anything!</p>
        <div class="team_section_2 layout_padding">
          <div class="container">
            <div class="images_main_1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="image_4"><img src="images/img-4.png"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="images/fb-icon.png"></a></li>
                      <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                      <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                      <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-7">
                  <h2 class="consectetur_text">Ironer</h2>
                  <p class="dummy_text">We ironing and fold all the clothes we iron. We also accept specific request from our customer, and our iron have no trouble following complex instructions.</p>
                </div>
              </div>
            </div>
            <div class="images_main">
              <div class="row">
                <div class="col-sm-7">
                  <h2 class="consectetur_text_1">Vacum Cleaner</h2>
                  <p class="dummy_text_1">We cleaning un the dirt that left on floor, sofas, and any other objects</p>
                </div>
                <div class="col-sm-5">
                  <div class="image_4"><img src="images/img-5.png"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="images/fb-icon.png"></a></li>
                      <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                      <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                      <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="images_main_1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="image_4"><img src="images/img-6.png"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="images/fb-icon.png"></a></li>
                      <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                      <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                      <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-7">
                  <h2 class="consectetur_text">Glass Cleaner</h2>
                  <p class="dummy_text">We clean up nicely then belive in unsurpassed quality service that leaves you satisfied and your windows spotless</p>
                </div>
              </div>
            </div>
            <div class="images_main">
              <div class="row">
                <div class="col-sm-7">
                  <h2 class="consectetur_text_1">Laundry</h2>
                  <p class="dummy_text_1">We wash. dry and fold your laundy to the highest standards</p>
                </div>
                <div class="col-sm-5">
                  <div class="image_4"><img src="images/img-7.png"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="images/fb-icon.png"></a></li>
                      <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                      <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                      <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- team section end -->

    <!-- pricing card start-->

    <div class="container-fluid">
      <div class="container p-5">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card card1 h-100">
              <div class="card-body">
                <center>
                <h1 class="card-title">Basic</h1>
                <small class='text-muted'>For Boarding Student</small>
                <br><br>
                <span class="h2">Rp75.000</span>/hour
                <br><br>
                <div class="d-grid my-3">
                  <a class="btn btn-outline-dark btn-block" href="login.php">Buy Now!</a>
                </div>
                </center>
                <ul>
                  <li>✓ Room cleaning (for 1 room only)</li>
                  <li>✓ Toilet cleaning (for 1 toilet only)</li>
                  <li>✗ Kitchen room cleaning</li> 
                  <li>✗ Frontyard and Backyard cleaning</li>
                </ul>
              
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card card2 h-100">
            <div class="card-body">
              <center>
                <h1 class="card-title">Standard</h1>
                <small class='text-muted'>For Best Value!</small>
                <br><br>
                <span class="h2">Rp120.000</span>/hour
                <br><br>
                <div class="d-grid my-3">
                  <a class="btn btn-outline-dark btn-block" href="login.php">Buy Now!</a>
                </div>
                </center>
                <ul>
                  <li>✓ Room cleaning (for 2 room only)</li>
                  <li>✓ Toilet cleaning (for 2 toilet only)</li>
                  <li>✓ Kitchen room cleaning</li>  
                  <li>✗ Frontyard and Backyard cleaning</li>
                </ul>
            
            </div>

            
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card card3 h-100">
            <div class="card-body">
              <center>
              <h1 class="card-title">Premium</h1>
              <small class='text-muted'>Cleanest of em' all</small>
              <br><br>
              <span class="h2">Rp200.000</span>/hour
              <br><br>
              <div class="d-grid my-3">
              <a class="btn btn-outline-dark btn-block" href="login.php">Buy Now!</a>
              </div>
              </center>
              <ul>
                <li>✓ Room cleaning (for 4 room only)</li>
                <li>✓ Toilet cleaning (for 2 toilet only)</li>
                <li>✓ Kitchen room cleaning</li>
                <li>✓ Frontyard and Backyard cleaning</li>
              </ul>
            </div>
          </div>
        </div>
      </div>    
    </div>

    <!-- pricing card end-->

    <!-- newsletter section start -->
    <div class="newsletter_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="newsletter_text">SUBSCRIBE!</h1>
            <p class="tempor_text">Get notification for every new feature we updated!</p>
          </div>
          <div class="col-md-6">
            <div class="mail_bt_main">
              <input type="text" class="mail_text" placeholder="ENTER YOUR MAIL" name="Enter Tour Mail">
              <div class="subscribe_bt"><a href="#">SUBSCRIBE</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- newsletter section end -->

    <!-- footer section start -->
    <form action="#" method="POST">
      <div class="footer_section layout_padding">
        <div class="container">
          <div class="footer_main">
            <div class="footer_left">
              <h1 class="contact_taital"><span>Contact </span> <img src="images/icon-2.png"> <span>Us</span></h1>
            </div>
            <div class="footer_left">
              <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">Current Locations</span></a></div>
            </div>
            <div class="footer_left">
              <div class="location_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_15" href="wa.me/+6281260588705">+6281260588705</span></a></div>
            </div>
            <div class="footer_left">
              <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">mipoclean@gmail.com</span></a></div>
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
                    <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon1.png"></a></li>
                    <li><a href="#"><img src="images/linkden-icon1.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon1.png"></a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>