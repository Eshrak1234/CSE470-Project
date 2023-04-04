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
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Online Vaccine Registration </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php"> Home </a> 
				<a href="#" style="margin-left: 20px;"> Applicants </a> 
				<a href="#" style="margin-left: 20px;"> Admin  </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> All Applicants List </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  Applicants NID </div>
				<div class="col-md-3">  Applicants Address </div>
				<div class="col-md-3">  Name </div>
				<div class="col-md-3">  Password </div>
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("dbconnect.php");
			$sql = "SELECT * FROM applicant WHERE 1";
			// $result = mysqli_query($conn, $sql);
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				//here we will print every row that is returned by our query $sql
				while($row = $result->fetch_assoc()){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3"><a href="dose.php?id=<?=$row['nid']?>"><?php echo $row['nid']; ?></a></div>
				<div class="col-md-3">  <?php echo $row['address']; ?> </div>
				<div class="col-md-3">  <?php echo $row['name']; ?> </div>
				<div class="col-md-3">  <?php echo $row['password']; ?> </div>
			</div>
			
			<?php 
				}					
			}
			?>
			
		</div>
		
		
		
		
		
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

