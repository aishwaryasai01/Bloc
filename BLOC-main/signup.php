<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h1>SIGN UP</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

	<label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>College</label>
	<?php if (isset($_GET['college'])) { ?>
          <input type="text" 
                 name="college" 
                 placeholder="college"
	value="<?php echo $_GET['college']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="college" 
                      placeholder="College"><br>
          <?php }?>

     	<button type="submit">Sign Up</button>
          <a href="actual_index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>