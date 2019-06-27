<?php
 include("config/db.php");
 @$get=$_GET['id'];

?>
<head>
  <title>Read More</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
	 <div class="col-md-12">
	 <h2 class="heading"> Blog <span class="purple"> SPOT </span> </h2>
	 
	 </div>
	 </div>
	 <br>
	
		<div class="post">
		 
			<?php
			if($get)
			{	
				
				$select="select * from news where id='$get'";
			}
			
			
			$select_run=mysqli_query($con,$select);
			$count=mysqli_num_rows($select_run);
			if($count>0)
			{
			 while($row=mysqli_fetch_array($select_run))
				 
				 {
					
					$id=$row['id'];
					$name=$row['Name'];
					$text=$row['Text'];
					$date=$row['Date'];
					$img=$row['img'];
					
					 
			?>
			
			<div class="row">
	<div class="col-md-12" style="border:0px solid">  
			<h3 style="font-weight: bold;
			color:black;
				text-align:center;
			"><?php echo $name;?></h3>
			
				<img src="img/<?php echo $img;?>" class="img img-thumbnail"width="100%" />
			
			
			<h6 style="float:right;
				clear:both;" >Date : <?php echo $date;?></h6>
			<br/>
			<div >
				<h4>Share it @ <a href="https://www.facebook.com/" ><i class="fa fa-facebook-official" aria-hidden="true"></i></a></h4>
			</div>
			<br/><br/><br/>
			<p style="text-align:justify;">
			<?php echo $text;?>
			</p>
			
			</div>
			</div>
			
			<?php
			}}
			
			
			else{
				echo "<h3><center>NO post available</center></h3>";
			}
			?>
		<br/>
		<br/>
		</div>
			</div>	
	 <br>
	  <br>
	
		<?php include("include/footer.php");
	?>
</div>
</div>
</body>
</html>