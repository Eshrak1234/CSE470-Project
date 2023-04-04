<html lang="en">
  <head>
  <style media="screen">
		table{
			border:1px solid black;
			border-collapse: collapse;
			width: auto;
			margin-left:auto;
			margin-right:auto;
			margin-top:30px;
		}

		th{
			border:1px solid black;
			font-size:25px;
			padding:5px;	
		}

		td{
			border: 1px solid black;
			text-align: center;
			padding: 5px;
			font-size:20px;
		}
		</style>
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
				<a href="#" style="margin-left: 20px;"> Applicants </a> 
				<a href="#" style="margin-left: 20px;"> Admin  </a> 
			</div>
		</div>
	</section>
	<?php
			$host="localhost:3306";
			$user="root";
			$pass="";
			$db="vacc_reg";

			$conn=mysqli_connect($host,$user,$pass,$db);	
		
		?>
		<table>
			<th>NID</th>
			<th>Dose 1 Date</th>
			<th>Dose 1 Status</th>
			<th>Dose 2 Date</th>
			<th>Dose 2 Status</th>
			<?php

			$sql="SELECT *	FROM data";
			$query=mysqli_query($conn,$sql);
			while($info=mysqli_fetch_array($query))
			{
				?>	
				
				<tr> 
					<td> <?php echo $info['nid']; ?> </td>
					<td> <?php echo $info['dose1_date']; ?> </td>
					<td> <?php echo $info['dose1_status']; ?> </td>
					<td> <?php echo $info['dose2_date']; ?> </td>
					<td> <?php echo $info['dose2_status']; ?> </td>
				</tr>
				
				<?php
			}
			?>
		</table>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>