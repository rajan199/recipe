
<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Racipe Express</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->


<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/jquery-1.9.1.js"></script>
<script src="Scripts/bootstrap.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>
<!--script-->
</head>
<body> 

<?php
include 'database.php';

include 'header.php';

?>


<div class="container">

<div class="row">
<div class="col-md-12">
<?php
include 'alphaser.php';

?>
</div>
</div>
</div>
<!---->

	<div class="container">
			<div class="shoes-grid">
			<a href="register.php">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper">		  
					   <article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " style="height:272px;" src="images/med.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>Get register with us</h2>
								<label>FOR ALL RECIPES <b></b></label>
								<p></p>					
								<span class="on-get">Get Register</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " style="height:272px;" src="images/med.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>Get register with us</h2>
								<label>FOR ALL RECIPES <b></b></label>
								<span class="on-get">Get Register</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " style="height:272px;" src="images/med.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>Get register with us</h2>
								<label>FOR ALL RECIPES <b></b></label>
								<span class="on-get">Get Register</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
						
					 </div>
					 </a>
	                <ul class="wmuSliderPagination">
	                	<li><a href="#" class="">0</a></li>
	                	<li><a href="#" class="">1</a></li>
	                	<li><a href="#" class="">2</a></li>
	                </ul>
					 <script src="js/jquery.wmuSlider.js"></script> 
				  <script>
	       			$('.example1').wmuSlider();         
	   		     </script> 
	            </div>
	          </div>
	           	</a>
	   						
				<?php
				
				
				 $x1=@$_SESSION["search"];
	$con=mysql_connect('localhost','root','');
    mysql_select_db('racipe_database',$con);
     
 $res1=mysql_query("select * from racipe_tbl where racipe_name LIKE '$x1%'",$con);
$cnt=mysql_num_rows($res1);


				
				?>
				<div class=" w_content">
			<div class="women">
				<a href="#"><h4>Total Search related Racipes <span><?php echo $cnt; ?></span> </h4></a>
				 <div class="clearfix"> </div>	
			</div>
		</div>
				
	   		      <!----
	   		     <div class="shoes-grid-left">
			<a href="single.html">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>consectetur  elit</h4>
		   		     		<label>FOR ALL PURCHASE VALUE</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
							<span class="on-get">GET NOW</span>						
						</div>						
						<img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />
							
						<div class="clearfix"> </div>
						
	   		     	</div>
					</a>
					<a href="single.html">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>consectetur  elit</h4>
		   		     		<label>FOR ALL PURCHASE VALUE</label>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
							<span class="on-get">GET NOW</span>
						</div>		
						<img class="img-responsive shoe-left" src="images/wa.jpg" alt=" " />
						
						<div class="clearfix"> </div>
	   		     	</div>
					</a>
	   		     </div>-->
	   		    
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
	

				 <?php
				 
				 //$x1=@$_SESSION["search"];
				 $con=mysql_connect('localhost','root','');
				 mysql_select_db('racipe_database',$con);
     
$cnt1=mysql_query("select * from racipe_tbl  where racipe_name LIKE '$x1%'",$con);

$cnt=mysql_num_rows($cnt1);
if($cnt>=1)
{
while($row=mysql_fetch_assoc($cnt1))
  {



 echo' <div class="col-sm-6 col-md-4">';
   echo  '<div class="thumbnail" style="height: 450px;">';
     echo ' <img src="images/'.$row["racipe_img"].'"  style="height: 145px;"></img>';
 echo    '<div class="caption">
        <h3 style="font-size:16px">'.$row["racipe_name"].'</h3>
  <h3 >'.$row["racipe_price"].'</h3>
               
        <p><a href="login.php"><button type="button" style="width: 200px;" name="btnbuy" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-buy" aria-hidden="true"></span> Preview
</button>
<a href="login.php"><button type="button" style="width: 200px; background:#323A45; color:white; " name="btncar" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart
</button></a>
</p>

      </div>
    </div>
  </div>
  ';
  }
}
else
{
	
	echo "<script>";
	echo "alert('Not found');";
	echo "</script>";
	
}
   		     	
?>		
</div>
</div>
</div>
			<!--   	
			  
			  
			  
			  
			  
			  
	   		     </div>-->
<?php

include 'sidebar.php';

?>	   		    
<!--
				
	
	<!----><?php
	
	include 'footer.php';
	
	?>
</body>
</html>