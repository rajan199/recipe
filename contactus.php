<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>

<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
	

<title>Recipe Express</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/jquery-1.9.1.js"></script>
<script src="Scripts/bootstrap.js"></script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>
<!--script-->





</head>
<body onload="getLocation()"> 

<?php
include 'database.php';
include 'header.php';

?>

<form action="" method="post">

	<div class="container">
	
	<div class="col-md-9">
	
	<h2 style="margin-left: 669px;margin-top: -0px;">Contact: 9825181177 </h2>
		  
		    	
				<p><h2>Feedback Form</h2></p>
				<form>
				  <div>
					<b><span style="color: black;font-size:15px;">Email Address<label>*</label></span></b><br/>
					<input type="email" style="width: 550px; height: 40px;" name="txtid"  placeholder="Enter Email Id" required> 
				  </div>
				  
				  <br/>
				  
				  <div>
					<b><span style="color: black;font-size:15px;">Feedback<label>*</label></span></b><br/>
					<textarea style="width: 550px; height: 40px;" name="txtpass" placeholder="Enter Your feedback" required></textarea> 
					
				  </div>
				  <input type="submit" class="acount-btn" value="Post Feedback" style="margin-top: 18px;" name="btnlogin">
				 <?php 
				 if(isset($_POST["btnlogin"]))
				 {
					 
					$eid=$_POST["txtid"];
					$feed=$_POST["txtpass"];
					$con=mysql_connect("localhost","root","");
					mysql_select_db("racipe_database",$con);
					$res=mysql_query("insert into feedback_tbl values('null','$feed','$eid')");
				 if($res==1)
				 {
					 header('location:main.php');	
				 }
				 }
				 ?>
				 
			    </form>
					   
 </div>	
	</div>		   

	<div class="row">
	<div class="col-md-12">
	
	<?php
	
	include 'footer.php';
	?>
	</div>
	</div>
		<!--   	  
	</div>-->

	
	
	<!---->
</body>
</html>