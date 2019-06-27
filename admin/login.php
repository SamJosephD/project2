
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
 <center> 
 
 <h1 style="font-weight: bold"> Admin <span style="color: purple">  Login Panel </span> </h1></center> </div>
 <br>
 <br>

<form method="post" enctype="multipart/form-data">
<center><h3>Username</h3></center>


<input type="text" name="username" placeholder="username" style="width:400px"/>
<br/>
<br/>
<br/>

<center><h3>Password</h3></center>
<input type="password" name="password" placeholder="password" style="width:400px"/>
<br/>
<br/>
<br/>
<center><input type="submit" class="btn btn-success" style="padding:5px; font-size:17px;" name="SignIn" value="Login" /></center>
<br/>

<center><a href="register.php"><input type="button" class="btn btn-info" style="padding:5px; font-size:17px;" name="Register" value="Register" /></a></center>
</center>
</table>
</form>
	</body>
</html>
<?php
if(isset($_POST['SignIn'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query1= "select * from admin where username='$username' AND password='$password'";
	$runquery1=mysqli_query($con,$query1);
	if(mysqli_num_rows($runquery1)>0){
		header('location:dashboard.php');
		$_SESSION['username']=$username;
		
	}
	else{
		echo'<script>alert("Invalid username and password")</script>';
	}
}

?>