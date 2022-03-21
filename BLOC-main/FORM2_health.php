<?php include("insert2_health.php");?>
<!DOCTYPE html>
<html lang="en">

<style>
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color:black;
  color: white;
  //margin: -140px 0px 20px 100px;
  position: absolute;
  border: solid black;
  cursor: pointer;
  opacity: 0.8;
  font-size: 20px;
}

 /* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px ;
  
}
/*style preview*/
.form-container textarea{
  background: #f1f1f1;
  margin:20px 0px 22px 2px;
  border: 2px solid #A9A9A9;
  width:472px;
  height:120px;
 
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=number] {
  width: 100%;
  width:472px;
  height:50px;
  margin: 20px 0 22px 0px;
  border: 2px solid #A9A9A9;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #191970;
  color: white;
  padding: 18px 30px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  margin-left:30px;
  opacity: 0.8;
  font-size:15px;
}

/*background color to the cancel button */
.form-container .cancel {
  background-color: SteelBlue;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<body>

<form action="FORM2_health.php" method="POST">

      	
		
 		 <form action="/action_page.php" class="form-container">	
			<h1 style="text-align:center;" ><b>Form</b></h1><br>
                                       <div class="form-container">
                                      <label for="project_name" style="text-align:center;"><b>Project Name</b></label>
    		<input type="text" placeholder="Enter project Name" name="p_name" ></div>
  <script function(){document.getElementById("p_name").value="<?php echo $_GET['preview']; ?>";}</script>

    
    
  		
                                    <div class="form-container">
   		 <label for="preview" style="text-align:center;"><b>Preview</b></label>
   		 <textarea id="preview" name="preview" rows="4" cols="50"
			placeholder="Enter Preview" ></textarea></div>

                                    <div class="form-container">
    		<label for="no_teammates" style="text-align:center;"><b>Number of teammates</b></label>
   		 <input type="number" placeholder="Enter number" name="teamsize" ></div>


		<div class="form-container">
   		 <label for="contact" style="text-align:center;"><b>Contact</b></label>
   		 <textarea id="contact" name="contact" 
			placeholder="Enter contact details" ></textarea></div>


   		 <button type="submit" class="btn" name="submit" value="submit">Submit</button>
    		<a href="health.php"><button type="button" class="btn cancel" onclick="closeForm()">Close</button></a>
</form>
		
        <script>
		function openForm() {
  		document.getElementById("myForm").style.display = "block";
		}

    		function closeForm() {
 		 document.getElementById("myForm").style.display = "none";
		src="FORM2_health.php";
		
		}
		</script>


		
</body>
</html>