<?php
include("config/db.php");
?>

<!Doctype html>
<html>
<head>
  <title>Contact US</title>
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
	 <div class="col-md-12">
	 <h2 class="heading"> Blog <span class="purple"> SPOT </span> </h2>
	 
	 </div>
	 </div>
	 <br>
	<div class="row">
	 <div class="col-md-12">
	<br>
 <div class="col-md-12"> 
	 <div>
	   <span class="purple" > <center> <h3>Contact us</h3> </center> </span>
		</div>
	  <br>
	  <br>
	  <form action=contacts.php method="post">
	  <label for="name"> Write Your Name </label>
	  <input id="name" type="text" name="name" required class="form-control"> <br>
	  <label for="email"> Write Your Email </label>
	  <input id="name" type="text" name="email" required class="form-control"> <br>
	  <label for="msg"> Write Your Comments </label>
	  <textarea name=msg class="form-control" id=msg></textarea> <br>
	  <button name="submit" class="btn btn-success"> Send </button>
	  </form>
	  
	  <?php
	  if(isset($_POST['submit']))
	  {
		 $name=$_POST['name'];
		  $email=$_POST['email'];
		  		  $msg=$_POST['msg'];
		 
	 $insert= "insert into contact (name,email,msg) values ('$name','$email','$msg')";
	$run_in=mysqli_query($con,$insert);
	if($run_in)
	{
		
		echo "<script>alert('Your Comments Sended Successfully')</script>";
		
	}
	else
	{
		echo "<script> alert('Your Comments Sended Successfully')</script>";
	}
	 }
	  
	  
	  
	  ?>
	  
	  
	  
	  </div>
	  <br>
	  <br>
	
<br> <br> 
</div> 
	
	
	 
	
</div>
	
	<br/>
	<br/>
	<br/>
	<br/>
	<?php include("include/footer.php");
	?>
</div>
</div>
</body>
</html>