<?php

$host = "localhost:3306";
$user = "root";
$password = "";
$db = "vacc_reg";

session_start();

$data = mysqli_connect($host,$user,$password,$db);
if($data === false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nid= $_POST["nid"];
    $password= $_POST["password"];

    $sql = "select * from admin where nid = '".$nid."' AND password = '".$password."'  ";
    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if($row["user"] == "admin")
    {
        $_SESSION["nid"] = $nid;
        header("location:show_applicants.php");
    }
    else{
		 echo '<script>alert(" nid or password incorrect")</script>';
        
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> THE TITLE </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-12" style="font-size: 40px;color:white; text-align:center"> Online Vaccine Registration </div>
			<div class="col-md-12" style="text-align: right"> 
				<a href="home.php"> Home </a> 
				<a href = "reg.php" style="margin-left: 20px;"  >  Sign up </a>
				<a href="#" style="margin-left: 20px;"> Applicants </a> 
				<a href="admin_signin.php" style="margin-left: 20px;"> Admin  </a> 
			</div> 
		</div> 
	</section> 
	


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<section id = "section1"> 

<div class="title"> ADMIN SIGN IN </div>
<div class="login-container">
<div class="login">  

        <form method="post">
            <input type="text" name="nid" placeholder="nid" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login" class="btn">
            <p>Don't have a account? <a href="reg.php">Sign Up</a></p>
        </form>
</section>
    </div>
</div>


<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>


</body>
</html>