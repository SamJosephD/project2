<?php
include("config/db.php");
?>
<html>
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body class="main">
<div class="container"  style="background:white"> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">blog<span class="purple2"> Spot</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contacts.php">Contacts</a></li>
      
    </ul>
	</div>
</nav>
    <div class="row">
	 <div class="col-md-8">
	 <h2 class="heading"> Blog <span class="purple"> SPOT </span> </h2>
	 
	 </div>
	 </div>
	 <br>
	
	<div class="row">
	 <div class="col-md-8">
	 <img src="img/travel1.jpg" class="img img-thumbnail" style="height: 330px ; width :150% ; padding: 10px">
 
	 <div >
	   <span class="purple" > <center> <h3>latest post</h3> </center> </span>
		</div>
	 
	<div class="post">
	<?php
	$select="select * from news order by id Desc limit 0,4";
	$select_run=mysqli_query($con,$select);
	$count=mysqli_num_rows($select_run);
	if($count>0)
	{
		while($row=mysqli_fetch_array($select_run))
		{
			$id=$row[ 'id' ]; 
		 $name=$row[ 'Name' ]; 	
		 $text=$row[ 'Text' ]; 	
		 $date=$row[ 'Date' ]; 	
		 $img=$row[ 'img' ]; 	
			
	
	?>
	<br>
	<br>
	<div class="row">
	<div class="col-md-4" style="border:0px solid">  
	<img src="img/<?php echo $img ?>" class="img img-thumbnail" >
	</div>
	<div class="col-md-8">
   <h5 style="font:weight: bold;color:black"> <?php echo $name ?> </h5>
   <h6 style="float:right;"> <?php echo $date ?> </h6>
   <br>
    <p style="text-align:justify" ><?php echo $text ?> 
	</p>
	</div>
	<a href="viewnews.php?id=<?php echo $id;?>"><button class="btn btn-info" style="float:right;">read more</button></a>
 </div>
	<?php }}

else
{
	echo "<h4><center>Sorry No Post Available</center></h4>";
}

?>
	
 </div>
  
	 </div>
	

	<?php include("include/side.php");
	?>
	<?php include("include/footer.php");
	?>
</div>
</div>
</body>
</html>