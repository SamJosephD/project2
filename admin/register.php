<!Doctype html>

<html>
<?php
 include("config/db.php");
 session_start();
  ?>
<head>
<meta charset="UTF-8">
   <meta name="Author" content="SAM">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/admin.css" type="text/css">
<title> Login </title>
<body>
 <center> 
 <div class="samlog" style="background: #d5d8dc ;
border-radius:20px;">
 <h1 style="font-weight: bold"> Admin <span style="color: purple"> Registeration panel </span> </h1></center> 
 </div>
 <br>
 <br>


<form method="post" enctype="multipart/form-data">





<center><h3>Username</h3></center>
<center><input type="text" name="username" placeholder="type your username"  style="width:400px"/></center>
<br/>
<br/>
<br/>
<center><h3>Password</h3></center></td>
<center><input type="password" name="password" placeholder="type your password"  style="width:400px"/></center>
<br/>
<br/>
<br/>

<center><input type="submit" class="btn btn-success" style="padding:5px; font-size:17px;" name="Register" value="Register"  /></center>


</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['Register'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query2="insert into admin (username,password) values('$username','$password')";
	$runquery2=mysqli_query($con,$query2);
	if($runquery2){
		echo'<script>alert("Account has been register")</script>';
		header('location:login.php');
		$_SESSION['username']=$username;
		
	}
}


?>