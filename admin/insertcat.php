<?php
 include("config/db.php");
 ?>
<html>
<head>
<title> Admin Panel </title>
<meta charset="UTF-8">
   <meta name="Author" content="SAM">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
 <link rel="stylesheet" href="css/admin.css" type="text/css">
<body>
 <div class="row">
  <div class="col-md-4">
  <div class="heading">
   <h3 style="text-align: center; font-weight: bold; color: white; line-height: 60px;"> Admin Panel </h3>
   </div>
      <div class="pro">
  <center> <img src="img/avatar.png" class="img img-circle"> </center>
   </div>
   <div class="menu">
    <ul>
	<li> <a href="dashboard.php"><center>Dashboard </center></a> </li>
	
	<li> <a href="view.php"><center> Insert/View</center></a> </li>
	<li class="active"> <a href="analytics.php"> <center>Categories  </center></a> </li>
	<li> <a href="profile.php"> <center>Profile</center></a> </li>
	</ul>
   </div>
   </div>
   <div class="col-md-8" style="background: #f5f5f5;">
   <div class="container-fluid">
   
   
   </div>
   <div class="container" style="background: white ; border:0px solid; position: absolute; width: 650px ;height:500px;">
   <form action="logout.php">
   <button class="btn btn-danger" style="float: right; margin-right: 20px;
   padding:10px;
   font-size:17px"> 
   Logout
   </button>
   </form>
   <h2 style="font-weight: bold"> View </h2>
   <h3> Insert News <span class="badge" style=" background:#f5f5f5"> 4 </span> </h3>
   <hr>
   <form action="insertcat.php" method="post">
   <label for=name> Write a Category name </label>
   <input required type="text" name="name" id=name class="form-control">
   <br>
   
   <button name="submit" class="btn btn-success" style="float: right;padding:10px;
   font-size:17px;"> Submit </button>
   </form>
   
   <?php
  
   if(isset($_POST['submit']))
   {
	   $name=$_POST['name'];
	   $in="Insert into cat (name) values ('$name')";
	   $ru=mysqli_query($con,$in);
	   if($ru)
	   {   
		   echo "<script>alert('Successful')</script>";
	   }
	   else
	   {
		   echo "<script>alert('Failed')</script>";
	   }
   }
   ?>
   
   <br>
   <br>
	
	
	
   </div>
  
   
   </div>
</head> 
</html>