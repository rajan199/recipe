
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
					<a href="main.php">
					<img src="images/rec_logo1.jpg" style="width:250px;" alt=" " /></a>
					</div>
<form action="" method="post">				
				<div class="search">
						<input type="text" value="" name="serch" id="search-box"  >
						<input type="submit" name="btnser"  value="SEARCH" style="font-size: 15px;color: black;">
		
		
		
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
						-->	<ul class="login">
								<li><a href="login.php"><span> </span>LOGIN</a></li> |
								<li ><a href="register.php">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="login.php"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs" style="background-color:lightseagreen;">
  <li role="presentation"><a href="main.php" style="color:black;font-size:18px; margin-right: 20;">Home</a></li>
  
  <li role="presentation"><a href="login.php" style="color:black;font-size:18px; margin-right: 20;">Add Your Racipe</a></li>

  <li role="presentation"><a href="question.php" style="color:black;font-size:18px; margin-right: 20;">FAQ</a></li>
  
  
  </ul>

	
	