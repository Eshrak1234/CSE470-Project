<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Registration </title>
    
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
			<div class="col-md-12" style="font-size: 40px;color:white; text-align:center">  Online Vaccine Registration </div>
			<div class="col-md-12" style="text-align: right"> 
				<a href="home.php" > Home </a> 
				<a href = "reg.php" style="margin-left: 20px;"> Sign Up </a>
				 
				<a href="admin_signin.php" style="margin-left: 20px;"> Admin  </a> 
			</div> 
		</div> 
	</section> 
	
	<section id = "section1"> 
		<div class="title"> SIGN IN </div>
		
		<form action="data.php" class="form_design" method="post">
			User_id: <input type="text" name="fname"> <br/>
			Password: <input type="password" name="pass"> <br/> <br/>
			<input type="submit" value="Sign In">
		</form>
	</section> 

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

