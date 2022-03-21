<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

    
        <meta charset="utf-8">
        <title>BLOC</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>>
<script>

</script>
/*******************************/
/********* General CSS *********/
/*******************************/
body {
    color: #797979;
    background: #ffffff;
    font-family: 'Open Sans', sans-serif;
}

h1,
h2, 
h3, 
h4,
h5, 
h6 {
    color: #343148;
}

a {
    color: #454545;
    transition: .3s;
}

a:hover,
a:active,
a:focus {
    color: #F7CAC9;
    outline: none;
    text-decoration: none;
}

.btn:focus,
.form-control:focus {
    box-shadow: none;
}

.container-fluid {
    max-width: 1366px;
}

.back-to-top {
    position: fixed;
    display: none;
    background: #F7CAC9;
    width: 44px;
    height: 44px;
    text-align: center;
    line-height: 1;
    font-size: 22px;
    right: 15px;
    bottom: 15px;
    transition: background 0.5s;
    z-index: 9;
}

.back-to-top:hover {
    background: #343148;
}

.back-to-top:hover i {
    color: #F7CAC9;
}

.back-to-top i {
    color: #343148;
    padding-top: 10px;
}


/**********************************/
/********** Top Bar CSS ***********/
/**********************************/
.top-bar {
    position: relative;
    height: 35px;
    background: #343148;
}

.top-bar .top-bar-left {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.top-bar .top-bar-right {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.top-bar .text {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    height: 35px;
    padding: 0 10px;
    text-align: center;
    border-left: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .text:last-child {
    border-right: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .text i {
    font-size: 13px;
    color: #ffffff;
    margin-right: 5px;
}

.top-bar .text h2 {
    color: #eeeeee;
    font-weight: 400;
    font-size: 13px;
    letter-spacing: 1px;
    margin: 0;
}

.top-bar .text p {
    color: #eeeeee;
    font-size: 14px;
    font-weight: 400;
    margin: 0 0 0 5px;
}

.top-bar .social {
    display: flex;
    height: 35px;
    font-size: 0;
    justify-content: flex-end;
}

.top-bar .social a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 100%;
    font-size: 16px;
    color: #ffffff;
    border-right: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .social a:first-child {
    border-left: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .social a:hover {
    color: #092a49;
    background: #ffffff;
}

@media (min-width: 992px) {
    .top-bar {
        padding: 0 60px;
    }
}


/**********************************/
/*********** Nav Bar CSS **********/
/**********************************/
.navbar {
    position: relative;
    transition: .5s;
    z-index: 999;
}

.navbar.nav-sticky {
    position: fixed;
    top: 0;
    width: 100%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .3);
}

.navbar .navbar-brand {
    margin: 0;
    color: #ffffff;
    font-size: 45px;
    line-height: 0px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: .5s;
    
}

.navbar .navbar-brand span {
    color: #343148;
    text-transform: lowercase;
    transition: .5s;
}

.navbar.nav-sticky .navbar-brand span {
    color: #ffffff;
}

.navbar .navbar-brand img {
    max-width: 100%;
    max-height: 40px;
}

.navbar-dark .navbar-nav .nav-link,
.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    padding: 10px 10px 8px 10px;
    color: #ffffff;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    background: rgba(256, 256, 256, .1);
    transition: none;
}

.navbar .dropdown-menu {
    margin-top: 0;
    border: 0;
    border-radius: 0;
    background:#ffffff;
}

@media (min-width: 992px) {
    .navbar {
        position: absolute;
        width: 100%;
        top: 35px;
        padding: 20px 60px;
        background: #F0F8FF!important;
        z-index: 9;
    }
    
    .navbar.nav-sticky {
        padding: 10px 60px;
        background: #343148 !important;
    }
    
    .navbar a.nav-link {
        padding: 8px 15px;
        font-size: 14px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
}

@media (max-width: 991.98px) {   
    .navbar {
        padding: 15px;
        background: #343148 !important;
    }
    
    .navbar .navbar-brand span {
        color: #ffffff;
    }
    
    .navbar a.nav-link {
        padding: 5px;
    }
    
    .navbar .dropdown-menu {
        box-shadow: none;
    }
}


/*******************************/
/********** Hero CSS ***********/
/*******************************/
.hero {
    position: relative;
    width: 100%;
    margin-bottom: 45px;
    padding: 90px 0;
    background: #87CEFA;
    overflow: hidden;
}

.hero .container-fluid {
    padding: 0;
}
.hero .hero-image {
    position: relative;
    text-align: right;
}

.hero .hero-image img {
    max-width: 80%;
    max-height: 80%;
}

.hero .hero-text {
    position: relative;
    padding-left: 75px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
}

.hero .hero-text h1 {
    color: #343148;
    font-size: 60px;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero .hero-text p {
    color: #343148;
    font-size: 18px;
    margin-bottom: 25px;
}

.hero .hero-btn .btn {
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #F7CAC9;
    background: #343148;
    border-radius: 0;
    transition: .3s;
}

.hero .hero-btn .btn:hover {
    color: #343148;
    background: #ffffff;
}

.hero .hero-btn .btn:first-child {
    margin-right: 10px;
}

@media (max-width: 991.98px) {
    .hero .hero-text {
        padding: 0 15px;
    }
    
    .hero .hero-text h1 {
        font-size: 35px;
    }
    
    .hero .hero-text p {
        font-size: 16px;
    }
    
    .hero .hero-text .btn {
        padding: 12px 30px;
        letter-spacing: 1px;
    }
}

@media (max-width: 767.98px) {
    .hero .hero-text h1 {
        font-size: 30px;
        font-weight: 600;
    }
    
    .hero .hero-text p {
        font-size: 14px;
    }
    
    .hero .hero-text .btn {
        padding: 10px 15px;
        font-weight: 400;
        letter-spacing: 1px;
    }
}

@media (max-width: 575.98px) {
    .hero .hero-text h1 {
        font-size: 25px;
        font-weight: 600;
    }
    
    .hero .hero-text p {
        font-size: 14px;
    }
    
    .hero .hero-text .btn {
        padding: 8px 10px;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 0;
    }
}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
</head>

    <body> 
       <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="top-bar-left">
                            
                            <div class="text">
                               <h2>Contact us at abc@gmail.com</h2>
                   		
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
       <div class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
           <div class="container-fluid">
	
		





                <a href="home.php" class="navbar-brand" style="color:Cadetblue;">BLOC</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home.php" class="nav-item nav-link " style="color:black;">Home</a>
			
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:black;">domain</a>
                            <div class="dropdown-menu">
                                <a href="ml.php" class="dropdown-item">Machine Learning</a>
                                <a href="ai.php" class="dropdown-item">Artificial Intelligence</a>
			<a href="wd.php" class="dropdown-item">Web Development</a>
			<a href="mad.php" class="dropdown-item">Mobile App Development</a>
			<a href="health.php" class="dropdown-item">Healthcare</a>
			<a href="fin.php" class="dropdown-item">Finance</a>
			<a href="iot.php" class="dropdown-item">IoT</a>
			<a href="bc.php" class="dropdown-item">BlockChain</a>
			<a href="agri.php" class="dropdown-item">Agriculture & Rural Development</a>
			<a href="other.php" class="dropdown-item">Other</a>
                            </div>
			
                        </div>
			<input type="text" class="form-control" placeholder="Search" disabled name="search">
			
			<a href="startup.php" class="nav-item nav-link " style="color:black;">STARTUP</a>
                        
		<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:black">profile</a>
                            <div class="dropdown-menu">
                                <a href="set.php" class="dropdown-item">Profile Info</a>
				
			<a href="completed.html" class="dropdown-item disabled">My Completed Projects</a>
			<a href="saved.html" class="dropdown-item disabled">Saved Projects</a>
			<a href="login.php" class="dropdown-item">Logout</a>
                            </div>
			
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1>Connecting Students.</h1>
                            <p>
				<h3><b>Hello <?php echo $_SESSION['name']; ?></b>, glad to see you here!!</h3>
                               
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
  
        <!-- Hero End --!>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>






	


        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


	<div class="container">
  <h2><b>About Domains</b></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
<li data-target="#myCarousel" data-slide-to="5"></li>
<li data-target="#myCarousel" data-slide-to="6"></li>
<li data-target="#myCarousel" data-slide-to="7"></li>
<li data-target="#myCarousel" data-slide-to="8"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="ML.png" alt="ml" style="width:100%;">
      </div>

      <div class="item ">
        <img src="AI.png" alt="ai" style="width:100%;">
      </div>
<div class="item ">
        <img src="webdev.png" alt="webdev" style="width:100%;">
      </div>
<div class="item ">
        <img src="iot.png" alt="iot" style="width:100%;">
      </div>
<div class="item ">
        <img src="agri.png" alt="agri" style="width:100%;">
      </div>
<div class="item ">
        <img src="mobapp.png" alt="mobapp" style="width:100%;">
      </div>
<div class="item ">
        <img src="health.png" alt="health" style="width:100%;">
      </div>
<div class="item ">
        <img src="block.png" alt="block" style="width:100%;">
      </div>
<div class="item ">
        <img src="fin.png" alt="finance" style="width:100%;">
      </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<br>
<br>
       





</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
