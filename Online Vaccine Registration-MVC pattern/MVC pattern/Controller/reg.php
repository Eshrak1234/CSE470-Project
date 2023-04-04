

<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');
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
				<a href="index.php" style="margin-left: 20px;"> Sign in  </a> 
				<a href="admin_signin.php" style="margin-left: 20px;"> Admin  </a> 
			</div>
		</div>
	</section>
	
<?php
   

    if(isset($_POST['submit'])){

        $nid= $_POST['nid'];
        $address= $_POST['address'];
        $name= $_POST['name'];
        $age= $_POST['age'];
		$date_of_birth= $_POST['date_of_birth'];
		$occupation= $_POST['occupation'];
		$reg_date= $_POST['reg_date'];
		$center_no= $_POST['center_no'];
		$password= $_POST['password'];
		

        if($nid != ""){
            if($name != ""){
                if($address !=""){

                    $user = ['nid'=> $nid,'address'=>$address,'name'=>$name, 'age'=>$age, 'date_of_birth'=>$date_of_birth, 'occupation'=>$occupation, 'reg_date'=>$reg_date, 'center_no'=>$center_no, 'password'=>$password ];

                    $con=mysqli_connect("localhost:3306","root","","vacc_reg");
                    $sql = "insert into applicant values('{$user['nid']}','{$user['address']}', '{$user['name']}', '{$user['age']}', '{$user['date_of_birth']}', '{$user['occupation']}', '{$user['reg_date']}', '{$user['center_no']}', '{$user['password']}')";

                    $status=mysqli_query($con, $sql);

                    if($status){
                        echo '<script>alert("Massege Send Successful")</script>';
                        header('Location: message.php');
                    }else{
                       echo '<script>alert(""Massege Send Not Successful")</script>';
                    }

                }else{
                    
					echo '<script>alert("name  is required")</script>';
                }
            }else{
                
				echo '<script>alert("address is required")</script>';
            }
        }else{
           echo '<script>alert("nid is required")</script>';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nid="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
<section id = "section1">
<form action="" class="form_design" method="POST">
		<div class="container">

		
		
		

		<div class="row">
		<div class="col-sm-3">
        
        
        <h1> Register here</h1>
        <label for="nid"><b>nid</b></label>
        <input class="form-control" type="number" name="nid" placeholder="nid" required/>
        <label for="address"><b>address</b></label>
        <input class="form-control" type="text" name="address" placeholder="address" required/>
        <label for="name"><b> name</b></label>
        <input class="form-control" type="text" name="name" pattern="[A-Za-z]{1,}" title="Name in letters only" placeholder="name in letters" required/>
        <label for="age"><b>age</b></label>
		<input class="form-control" type="number" name="age" placeholder="age" required/>
        <label for="date of birth"><b>date of birth</b></label>
		<input class="form-control" type="date" name="date_of_birth" placeholder="date_of_birth" required/><br>
        <label for="occupation"><b>occupation</b></label><br> 
		<select class="form-control" name="occupation" placeholder="occupation" required/>
        <option value="Doctor">Doctor</option>
		<option value="Engineer">Engineer</option>
		<option value="Teacher">Teacher</option>
		<option value="Government Officer">Government Officer</option>
		<option value="Police">Police</option>
		<option value="Worker">Worker</option>
		<option value="Student">Student</option>
		<option value="Housewife">Housewife</option>
		<option value="Age greater than 60"> Age greater than 60</option>
		</select> <br>  
        <label for="reg_date"><b>reg_date</b></label><br>
		<input  class="form-control" type="date" name="reg_date" placeholder="reg_date" required/><br>
        <label for="center_no"><b>center_no</b></label><br>
		<select class="form-control" name="center_no" placeholder="center_no"><br>
            <option value="101">Rajshahi Medical</option>
            <option value="100">Dhaka Medical</option>
            <option value="103">Barisal Medical</option>
            <option value="202">Chottogram Medical</option>
            <option value="222">Sylhet Medical</option>
            <option value="201">Rangpur Medical</option>
            <option value="102">Khulna Medical</option>
            <option value="104">Comilla Medical</option>
        </select>
        <label for="password"><b>password</b></label>
		<input class="form-control" type="password" name="password" placeholder="password" required/>
        
        <P>
        <P><input class="btn btn-primary" type="submit" name="submit"  value="Sign Up"      /></p>
        </p>
        
        
    </form>

    
    </script>
    </section>

    

</body>

</html>
<!----- Footer ----->
<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>
