<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>


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
	
	
	include 'header.php';
	
	
	?>
	<div class="container"> 
			         
		<div class="register">
		  	  <form enctype="multipart/form-data" action="" method="post"> 
				 <div class="  register-top-grid">
					<h1 style="color:#F97E76;">Sign Up</h1>
					<div>
					<span>Email Address<label>*</label></span>
					<input type="email" style="width: 550px; height: 40px;" name="txtid"  placeholder="Enter Email Id" required> 
				  </div>
				  <hr/>
					
				  <div>
					<span>User Name<label>*</label></span>
					<input type="text" style="width: 550px; height: 40px;" name="txtname" onblur="return allLetter(txtname);"  placeholder="Enter User name" required> 
				  </div>
				  <hr/>
					
				    
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" style="width: 550px; height: 40px;" name="txtpaswd" onblur="return passid_validation(txtpaswd);"placeholder="Enter password" required> 
				  </div>
				  
				  <hr/>
					
				   
				  <div>
					<span>Confirm Password<label>*</label></span>
					<input type="password"  style="width: 550px; height: 40px;" name="txtpass" onblur="return passid_validation(txtpass);"placeholder="Enter password" required>
                
					</div>
				  <hr/>
					
				
  <div>
					<span>Address<label>*</label></span>
				<textarea   name="txtadd" col="0" style="width: 550px; height: 64px;" onblur="return addressid_validation(txtadd);" placeholder="Enter Address" required></textarea>
                
                
				
					</div>
								
					<hr/>
								
				  <div>
					<span>Area<label>*</label></span>
					
				<select name="txtcity" autocomplete="off" style="width: 550px; height: 40px;">
<option value="Kankaria">Kankaria</option>
<option value="Maninagar">Maninagar</option>
<option value="Jaymala">Jaymala</option>
<option value="Isanpur">Isanpur</option>
<option value="Ghodasar">Ghodasar</option>
<option value="Dakshini">Dakshini</option>
<option value="Khokhara">Khokhara</option>
<option value="Raipur">Raipur</option>
<option value="Bhulabhai">Bhulabhai</option>


</select>
					</div>
					
					<hr/>
					
					
					
					
				  <div>
					<span>Zipcode<label>*</label></span>
					 <input type="text" maxlength='6' style="width: 550px; height: 40px;" onblur="return allzip(txtzip);"  name="txtzip"  placeholder="Enter zipcode number" required>
                       
					</div>
				  <hr/>
					
					
				  <div>
					<span>Gender<label>*</label></span>
					<input type="radio" name="txtgen" checked value="M">Male
					<br/>
					
					<br/>
					<input type="radio" name="txtgen"  value="F">Female
					</div>
				  
				  
				  <hr/>
					
				  <div>
				  <span>Mobile Number<label>*</label></span>
					<input  type="text"  name="txtno" maxlength="10" style="width: 550px; height: 40px;" onblur="return allnumeric(txtno);" placeholder="Enter mobile number" required>
                   
					</div>
					
					<hr/>
					
				  <div>
					<span>Captcha Code<label>*</label></span>
						<input  class="form-control" name="captcha_code" style="width: 550px; height: 40px;" type="text">
                     <img src="captcha_code.php" />
					</div>
					
					
					 <div class="clearfix"> </div>
					  
					 </div>
				<div class="clearfix"> </div>
				<div class="register-but">
					   <input type="submit" name="txtsign" value="Sign up">
					   <input type="submit" name="txtcancle" value="Cancle">
					   
					   
					   
					   
			 <?php

			 


if(isset($_POST["txtsign"]))
{
	
	   $id=$_POST["txtid"];
   $uname=$_POST["txtname"];
   $pass=$_POST["txtpass"];
   $add=$_POST["txtadd"];
   $city=$_POST["txtcity"];
   $zip=$_POST["txtzip"];
   $gen=$_POST["txtgen"];
   
   $mob=$_POST["txtno"];
   
   
   $random_alpha = md5(rand());
   $captcha = substr($random_alpha, 0, 10);
   $code=$_POST["txtid"].$captcha;
	$temp="null";

if(count($_POST)>0) {
if($_POST["captcha_code"]==$_SESSION["captcha_code"]){	
  $pass=$_POST["txtpaswd"];
  $pass1=$_POST["txtpass"];
  
  if($pass==$pass1)
  {
	//  include 'database.php';
//$res=new  database();
//$res->signup($id,$uname,$pass,$add,$city,$zip,$gen,$mob,$temp);

   $con=mysql_connect('localhost','root','');
   mysql_select_db('medicine',$con);
   $res=mysql_query("insert into user_tbl values('$id','$uname','$pass','$add','$city','$zip','$gen','$mob','$temp','user')");
   


header('location:login.php');
  }	  
  

else
{
	/*
	echo "<h3>";
	echo "Please confirm correct password";
	echo "</h3>";
	*/
	echo '<script type="text/javascript">';
 echo "alert('Please Confirm the correct password');";
   echo "</script>";
	
}
}

else{
//echo "<h3>";
//echo "Enter Correct Captcha Code";
//echo "</h3>";


	echo '<script type="text/javascript">';
 echo "alert('Please enter the correct Capthcha code');";
   echo "</script>";
	




}
}
else if(isset($_POST["txtcancle"]))
{
	header('location:main.php');
}
/*
else{
echo "<h3>";
echo "Enter Correct Captcha Code";
echo "</h3>";

}*/
}



?>


					   
					   
					   
					   
					   
					   <div class="clearfix"> </div>
				   </form>
				</div>
				<?php
	
			include 'sidebar.php';
	
				?>
	
		   </div>
		  
	<!---->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>FEATURE PROJECTS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="#">Curabitur sapien</a></li>
						<li><a href="#">Dignissim purus</a></li>
						<li><a href="#">Tempus pretium</a></li>
						<li ><a href="#">Dignissim neque</a></li>
						<li ><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Ultrices id du</a></li>
						<li><a href="#">Commodo sit</a></li>
						<li ><a href="#">Urna ac tortor sc</a></li>
						<li><a href="#">Ornared id aliquet</a></li>
						<li><a href="#">Urna ac tortor sc</a></li>
						<li ><a href="#">Eget nisi laoreet</a></li>
						<li ><a href="#">Faciisis ornare</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li >nisi, dignissim</li>
						<li >gravida at.</li>
						<li class="phone">PH : 6985792466</li>
						<li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>