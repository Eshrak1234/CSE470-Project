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
		<h2 class="text-center"><a href="show_applicants.php">All Applicants</a></h2>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("dbconnect.php");
			$id = $_GET['id'];

			if (isset($_POST['dose_submit'])) {
				$dose1 = $_POST["dose1"];
				$dose2 = $_POST["dose2"];
				$dose1s = $_POST["dose1s"];
				$dose2s = $_POST["dose2s"];
				$sql = 'INSERT INTO data 
				(nid, Dose1_date, Dose1_status, Dose2_date, Dose2_status) 
				VALUES ("'.$id.'", "'.$dose1.'", "'.$dose1s.'", "'.$dose2.'", "'.$dose2s.'")';
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
			}
			$sql = "SELECT * FROM applicant WHERE nid = $id";
			// $result = mysqli_query($conn, $sql);
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				?>
				<form action="" method="post">
					<div class="row">
						<div class="col-md-4">
							<h2><?=$id?></h2>
						</div>
						<div class="col-md-8">
							<h4>name: <?=$row['name']?></h4>
						</div>
						<div class="col-md-3">
							<label for="">1st dose</label>
							<input type="date" name="dose1" class="form-control">
						</div>
						<div class="col-md-3">
							<label for="">1st dose Status</label>
							<select name="dose1s">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="">2nd dose</label>
							<input type="date" name="dose2" class="form-control">
						</div>
						<div class="col-md-3">
							<label for="">2nd dose Status</label>
							<select name="dose2s">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
						</div>
						<input type="submit" value="Submit" name="dose_submit">
					</div>
				</form>
				<?php					
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

