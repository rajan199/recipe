
	<!--header
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
				 <div class="down-top">		
						  <select class="in-drop">
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
					 </div>
					<div class="down-top top-down">
						  <select class="in-drop">
						  
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div>
					 <!---->
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="user_profile.php"><img src="../images/jay_Jalaram.jpg" style="width:250px;" alt=" " /></a>
					</div>
<form action="" method="post">				
				<div class="search">
						<input type="text" value="" name="serch" id="search-box"  >
						<input type="submit" name="btnser" value="SEARCH">
		
							<?php
				if(isset($_POST["btnser"]))
				{
					$_SESSION["search"]=$_POST["serch"];
					header('location:search.php');
				}
			
			?>
		
						
					</div>				

					
					
					</form>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
					<!--	<div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="login.php"><span> </span>LOGIN</a></li> |
								<li ><a href="register.php">SIGNUP</a></li>
							</ul>-->
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					 				
<?php
$id= $_SESSION["uname"];
//	$con=mysql_connect("localhost","root","");
//	mysql_select_db("medicine",$con);
//	$res=mysql_query("select * from user_tbl where email_id='$id'",$con);
	
	
$obj=new database();
$res=$obj->getUserName($id);

	
	while($row=mysql_fetch_assoc($res))
	{
		$uname=$row["user_name"];
	}
?>
					<h3><?php echo "Welcome ".$uname; ?></h3>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>

	
<ul class="nav nav-tabs" style="background-color:white;">
  <li role="presentation"><a href="user_profile.php" style="color:black; margin-right: 20;">Home</a></li>
  
  <li role="presentation"><a href="skin.php" style="color:black; margin-right: 20;">Skin Care</a></li>
  <li role="presentation"><a href="baby.php" style="color:black; margin-right: 20;">Baby Care</a></li>
  
  <li role="presentation"><a href="hair.php" style="color:black; margin-right: 20;">Hair Care</a></li>

  <li role="presentation"><a href="question.php" style="color:black; margin-right: 20;">Question</a></li>
  
  <li class="dropdown" style="margin-left:580px">
          <a href="#" style="color:black;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="view_profile.php">Manage Profile</a></li>
            <li><a href="update_password.php">Change password</a></li>
            </ul>
        </li>
  <li role="presentation"><a href="question.php" style="color:black; margin-right: 20;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> History</a></li>

		<li role="presentation"><a href="question.php" style="color:black; margin-right: 20;"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
  
  </ul>
