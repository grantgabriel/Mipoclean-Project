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
<title>Mipoclean-Services</title>
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
                    <div class="padding_left0"><a href="#">Register</a>
                    <span class="padding_left0"><a href="#">Login</a></span></div>
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
</body>
</html>