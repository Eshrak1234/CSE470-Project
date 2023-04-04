<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['nid']) && isset($_POST['address']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['day'])&& isset($_POST['month']) && isset($_POST['year']) && isset($_POST['Occupation']) && isset($_POST['reg_date']) && isset($_POST['center_no'])  ){
	// write the query to check if this username and password exists in our database
	$a = $_POST['nid'];
	$b = $_POST['address'];
	$c = $_POST['name'];
	$d = $_POST['Age'];
	$e = $_POST['day'];
	$f = $_POST['month'];
	$g = $_POST['year'];
	$h = $_POST['occupation'];
	$i = $_POST['reg_date'];
	$j = $_POST['center_no'];
	
	$sql = " INSERT INTO applicant VALUES( '$a', '$b', '$c', '$d','$e', '$f', '$g', '$h','$i', '$j' ) ";

	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_applicants.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: reg.php");
	}
	
}


?>