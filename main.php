<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
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

	<div class="container">
			<div class="shoes-grid">
			<a href="register.php">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper">		  
					   <article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " style="height:272px;" src="images/racipe.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>Get register with us</h2>
								<label>FOR More Recipes <b></b></label>
								<p></p>					
								<span class="on-get">Get Register</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " style="height:272px;" src="images/racipe.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>Get register with us</h2>
								<label>FOR ALL MORE RECIPE<b></b></label>
								<p></p>		
								<span class="on-get">Get Register</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " style="height:272px;" src="images/racipe.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>Get register with us</h2>
								<label>FOR ALL RECIPE <b></b></label>
								<p></p>		
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
	   		      
	   		     <div class="products">
	   		     	<h5 class="latest-product">LATEST RACIPES</h5>	
	   		     	  <a class="view-all" href="racipe.php">VIEW ALL<span> </span></a> 		     
	   		     </div>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
	
<?php
/*			 
$con=mysql_connect('localhost','root','');
mysql_select_db('medicine',$con);
$cnt=mysql_query("select p.*,c.company_name from product_tbl as p,company_tbl as c where p.company_id=c.company_id",$con);
*/

//include 'database.php';

$obj=new database();
$cnt=$obj->view_some_racipe();

//include 'C:\wamp\www\phpmedicine\database.php';
//echo '<h1>'.meet.'</h1>';


while($row=mysql_fetch_array($cnt))
  {

 echo' <div class="col-sm-6 col-md-4">';
   echo  '<div class="thumbnail" style="height: 450px;">';
     echo ' <img src="images/'.$row["racipe_img"].'"  style="height: 145px;"></img>';
 echo    '<div class="caption">
        <h3 style="">'.$row["racipe_name"].'</h3>
  <h3>RS '.$row["racipe_price"].'</h3>
               
        <p><a href="login.php"><button type="button" style="width: 200px;" name="btnbuy" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-buy" aria-hidden="true"></span> Preview
</button></a>
<a href="login.php"><button type="button" style="width: 200px; background:#323A45; color:white; " name="btncar" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart
</button></a>
</p>

      </div>
    </div>
  </div>
  ';
  }   		     	
?>		
</div>
</div>
</div>
	<!--   	  
	</div>-->
<?php
//include 'database.php';
include 'sidebar.php';

?>	   		    
<!--
				
	
	<!----><?php
	
	include 'footer.php';
	
	?>
</body>
</html>