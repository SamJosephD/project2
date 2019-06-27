<?php
 include("config/db.php");
  @$msg=$GET_['msg'];
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
	<li class="active"> <a href="analytics.php"> <center>Categories </center></a> </li>
	<li> <a href="profile.php"> <center>Profile</center></a> </li>
	</ul>
   </div>
   </div>
   <div class="col-md-8" style="background: #f5f5f5;">
   <div class="container-fluid">
  
   </div>
   <?php
   $select="select * from cat order by id Desc";
   $run=mysqli_query($con,$select);
   $count=mysqli_num_rows($run);
   ?>
   <div class="container" style="background: white ; border:0px solid; position: absolute; width: 650px ;height:500px;">
    <form action="logout.php">
   <button class="btn btn-danger" style="float: right; margin-right: 20px;
   padding:10px;
   font-size:17px"> 
   Logout
   </button>
   </form>
   <h2 style="font-weight: bold"> View </h2>
   <h3> Categories  <span class="badge" style=" background:#f5f5f5"> <?php echo "$count";?> </span> </h3>
   
   <br>
   <br>
   <br>
	<center> <h3> <?php echo  "$msg" ;?> </center>
	<a href="insertcat.php" class="btn btn-info"style= "padding:5px; font-size:17px;float:right;"> Insert Categories </a>
	<table class="table table-hover table-striped table-bordered"> 
	<tr>
	<th> S.no </th>  
	<th> Name </th>
	<th> Action </th>
	</tr>
	<?php
	$no=1;
	while($row=mysqli_fetch_array($run))
	{
		$name=$row['name'];
		$id=$row['id'];
	
	
	
	?>
	<tr>
	<th><?php echo $no++; ?>  </th>
	<th> <?php echo "$name";?> </th>
	<th> <a href=deletecat.php?id=<?php echo "$id";?> class="btn btn-danger" style="padding:5px; font-size:17px;" >Delete </a></th>
	<?php } ?>
	</tr>
	
   </div>
  
   
   </div>
</head> 
</html>