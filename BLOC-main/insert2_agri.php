<?php
include 'database2.php';
if(isset($_POST['submit']))
{    
     $p_name = $_POST['p_name'];
     $teamsize = $_POST['teamsize'];
     $contact = $_POST['contact'];
     $preview = $_POST['preview'];
     $sql = "INSERT INTO agri_project(p_name,teamsize,contact,preview) values('$p_name','$teamsize','$contact','$preview')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
	header("Location:agri.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>