<?php

session_start();

if($_SESSION["uname"]=="")
{
	header('location:../login.php');
}

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

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/jquery-1.9.1.js"></script>
<script src="../Scripts/bootstrap.js"></script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="../js/jquery.min.js"></script>
<!--script-->





</head>
<body> 

<?php
include '../database.php';
include 'user_header.php';

?>

<form action="" method="post">

	<div class="container">
	   	  
<div class="row">
	<div class="col-md-9">
	<h2 style="margin-left: 669px;margin-top: 0px;">Contact: admin@gmail.com </h2>
		  	<p><h2>Feedback Form</h2></p>
	
	
				  
				  <br/>
				  
				  <div>
					<b>Give Feedback<label>*</label></b>
					<br/>
					<textarea style="width: 550px; height: 40px;" name="txtfeed" placeholder="Enter Your feedback" required></textarea> 
					
				  </div>
				    <input class="acount-btn" type="submit" name="btnlogin" value="Post Feedback">
					
				 <?php 
				 if(isset($_POST["btnlogin"]))
				 {
					 $eid=$_SESSION["uname"];
				//	$eid=$_POST["txtid"];
				echo $eid;
					$feed=$_POST["txtfeed"];
					$con=mysql_connect("localhost","root","");
					mysql_select_db("racipe_database",$con);
					$res=mysql_query("insert into feedback_tbl values('null','$feed','$eid')");
				 if($res==1)
				 {
					 header('location:user_profile.php');	
				 }
				 }
				 ?>
				 
			    </form>
				   
 </div>	
	
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