
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
<title>Recipe Express</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->


<link href="../Content/bootstrap.css" rel="stylesheet"/>
<script src="../Scripts/jquery-1.9.1.js"></script>
<script src="../Scripts/bootstrap.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="../js/jquery.min.js"></script>


	<script type="text/javascript">
	
	function allLetter(uname)
{
	var letters=/^[A-Za-z]+$/;
	if(uname.value.match(letters))
	{
			return true;
	}
	else
	{
			uname.focus();
			
			alert('username must have alphabetic charcters only');
			return false;
	}
}





function passid_validation(passid,mx,my)
{
	var pl=passid.value.length;
	if(pl==0 || pl>=my || pl<mx)
	{
		alert("password should not be empty/length must be between "+5+" to "+12);
		passid.focus();
		return false;
	}
	return true;
}

function allnumeric(unum)
{
		var number=/^[0-9]+$/;
		if(unum.value.match(number))
		{
			return true;
		}
		else
		{
				alert('Mobile number must have numeric characters only');
				unum.focus();
				return false;
				
		}
}

function mess()
{
	alert("enter correct captcha code");

}

function allzip(uzip)
{
		var numbers=/^[0-9]+$/;
		if(uzip.value.match(numbers))
		{
			return true;
		}
		else
		{
				alert('ZIP code must have numeric characters only');
				uzip.focus();
				return false;
				
		}
}



</script>


</head>
<body> 
	<?php
	
	include '../database.php';
	include 'user_header.php';
	
	
	?>
	
	
<?php

$id=$_SESSION["uname"];

			


?>

	<div class="container"> 
			         
		<div class="register">
		  	  <form enctype="multipart/form-data" action="ins_racipe.php" method="post"> 
				 <div class="  register-top-grid">
					<h1 style="color:#F97E76;">Add Recipe Details</h1>

				  <div>
					<b><span style="color: black;font-size:15px;">Recipe Name<label>*</label></span></b>
					<input type="text" class="form-control" style="width: 550px; height: 40px;" name="txtrecname" value=""  placeholder="Enter Recipe name" > 
				  </div>
				  <hr/>
					
				    
				  <div>
					<b><span style="color: black;font-size:15px;">Picture of Dish<label>*</label></span></b>
				  <input type="file" class="form-control" name="txt_img"  style="width: 550px; height: 40px;" required>
             	  </div>
				  <hr/>
					
					
				  <div>
					<b><span style="color: black;font-size:15px;">Ingredient of Dish<label>*</label></span></b>
					<textarea name="txting" col="5" class="form-control" style="width: 550px;height: 60px;" placeholder="Enter Ingredient" required></textarea>
				  </div>
				  <hr/>
					
					  <div>
					<b><span style="color: black;font-size:15px;">Method of Making Dish<label>*</label></span></b>
					<textarea name="txtmethod" col="5" class="form-control" style="width: 550px;height: 60px;" placeholder="Enter Method" required></textarea>
				  </div>
				  <hr/>
				
				  <div>
					<b><span style="color: black;font-size:15px;">Dish Price<label>*</label></span></b>
					<input type="text" class="form-control" style="width: 550px; height: 40px;" name="txtpri" value=""   placeholder="Enter  price of dish" required> 
				  </div>
				  <hr/>
					
					
					
					
				  
							
				  <div>
					
				  
				  
					
					 <div class="clearfix"> </div>
					  
					 </div>
				<div class="clearfix"> </div>
				<div class="register-but">
					   <input class="acount-btn" type="submit" name="btnsub" value="Add">
					   <input type="submit" class="acount-btn" name="btncan" value="Cancel">
					   
				</div>
						<?php
if(isset($_POST["btncan"]))
{
	header('location:view_profile.php');
}

?>	
					   
			  <div class="clearfix"> </div>
   </div>
								
				</form>
				   </div>
				<?php
	
	//	include 'sidebar.php';
	
				?>
	</div>
				
	<!---->
<div class="row">
<div class="col-md-12">
	<?php


include '../footer.php';


?>
	</div>
	</div>
	</body>
</html>