<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BLOC</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

    

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
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

.hero .hero-text h1 {
    color: #343148;
    font-size: 70px;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero .hero-text p {
    color: #343148;
    font-size: 18px;
    margin-bottom: 25px;
}





</style>
</head>

    <body> 
       <!-- Top Bar Start -->
        <div class="top-bar">
            
                               
                   	
            
 
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand" style="color:Cadetblue;">BLOC</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

    
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
                                Explore your interests and enhance your skills.
                            </p>
		<a href='actual_index.php'<button<span style="background-color: #555555; color:white;font-size: 17px; shadow:5px; padding :10px 15px; cursor: pointer;"><b>Login</b></button></a>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Hero End --!>




        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
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


    </body>
</html>