<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <title>Profile Info</title>
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


    <!-- Hide and show -->


  <meta charset="UTF-8">
	<title>Hide and Show Content with Tabs</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".content .tab_content").hide();
			$(".content .tab_content:first-child").show();

			$("ul li").click(function(){
			  
			  $("ul li").removeClass("active");
			  $(this).addClass("active");
			  
			  var current_tab = $(this).attr("data-list");
			  $(".content .tab_content").hide();
			  $("."+current_tab).show();
			})
		});
	</script>
        
       
<style>
/***/
/* General CSS */
/***/


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

.top-bar {
    position: relative;
    height: 35px;
    background: #343148;
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





.top-bar .text h2 {
    color: #eeeeee;
    font-weight: 400;
    font-size: 13px;
    letter-spacing: 1px;
    margin: 0;
}





.top-bar .social a:hover {
    color: #092a49;
    background: #ffffff;
}

/**/
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
                <a href="home.php" class="navbar-brand" style="color:Cadetblue; padding-top:20px;">BLOC</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="home.php" class="nav-item nav-link " style="color:black;">Home   </a>
			
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:black;">domain  </a>
                            <div class="dropdown-menu">
                               <h4 style="padding-left:5px;  padding-right:5px;" > <a href="ML.php" class="dropdown-item">Machine Learning</a></h4>
                                <h4  style="padding-left:5px;  padding-right:5px;" ><a href="ai.php" class="dropdown-item">Artificial Intelligence</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="wd.php" class="dropdown-item">Web Development</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="mad.php" class="dropdown-item">Mobile App Development</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="health.php" class="dropdown-item">Healthcare</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="fin.php" class="dropdown-item">Finance</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="iot.php" class="dropdown-item">IoT</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="bc.php" class="dropdown-item">BlockChain</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="agri.php" class="dropdown-item">Agriculture & Rural Development</a></h4>
			<h4  style="padding-left:5px;  padding-right:5px;" ><a href="other.php" class="dropdown-item">Other</a></h4>
                            </div>
			
                        </div>
		
			
             
     			<h5 style="padding-left:5px;  padding-right:5px; padding-top:10px;" ><a href="login.php" class="dropdown-item"><b>LOGOUT</b></a></h5>
                            </div>
			
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
<br><br><br>

<hr>
    
          
            
                <br>
<br>
<br>
	<h1 style="text-align:center;"><b> PROFILE INFORMATION</b></h1>
	
<br>
  	<h1 style="text-align:center;"> Username : <?php echo $_SESSION['user_name']; ?></h1>
    
                 <h1 style="text-align:center;">Name : <?php echo $_SESSION['name']; ?></h1>
                              

          
        <h1 style="text-align:center;">College : <?php echo $_SESSION['college']; ?></h1>
                                               

               <h1 style="text-align:center;">Email : <?php echo $_SESSION['email']; ?></h1>
                         

              	
          
              
             
         

        
 
    	
</body>
</html>