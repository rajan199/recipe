<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>
<head>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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
			<a href="single.html">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper">		  
					   <article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/bag.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					
								<span class="on-get">GET NOW</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/bag1.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					
								<span class="on-get">GET NOW</span>
							</div>
							
							<div class="clearfix"> </div>
						</div>
						
					 	</article>
					 	<article style="position: absolute; width: 100%; opacity: 0;">					
						<div class="banner-matter">
						<div class="col-md-5 banner-bag">
							<img class="img-responsive " src="images/bag.jpg" alt=" " />
							</div>
							<div class="col-md-7 banner-off">							
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					
								<span class="on-get">GET NOW</span>
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
				
				$obj=new database();
				$cnt=$obj->product_display();
				
	//$con=mysql_connect('localhost','root','');
   // mysql_select_db('medicine',$con);
     
 //$res1=mysql_query("select * from product_tbl",$con);
//$cnt=mysql_num_rows($res1);


				
				?>
				<div class=" w_content">
			<div class="women">
				<a href="#"><h4>Total Products <span><?php echo $cnt; ?></span> </h4></a>
				<ul class="w_nav">
					<li>Other Products: </li>
			     	<li><a class="active" href="#">Injections</a></li> |
			     	<li><a href="skin.php">Skin care </a></li> |
			     	<li><a href="baby.php">Baby care</a></li> |
			     	<li><a href="hair.php">Hair care </a></li> 
			     <div class="clearfix"> </div>	
			     </ul>
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
			//	 $con=mysql_connect('localhost','root','');
    //mysql_select_db('medicine',$con);
     
//$cnt1=mysql_query("select p.*,c.company_name from product_tbl as p,company_tbl as c where p.company_id=c.company_id",$con);
	$obj=new database();
				$cnt1=$obj->view_products();

while($row=mysql_fetch_assoc($cnt1))
  {



 echo' <div class="col-sm-6 col-md-4">';
   echo  '<div class="thumbnail">';
     echo ' <img src="http://localhost:3000'.$row["product_img"].'"  style="height: 145px;"></img>';
 echo    '<div class="caption">
        <h3>'.$row["product_name"].'</h3>
  <h3>'.$row["product_price"].'</h3>
               
        <p><a href="single.php?id='.$row["product_id"].'"><button type="button" style="width: 200px;" name="btnbuy" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-buy" aria-hidden="true"></span> Preview
</button>
<a href="login.php"><button type="button" style="width: 200px; background:#323A45; color:white; " name="btncar" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart
</button></a>
</p>

	<div class="star-price">
	   		     				<div class="dolor-grid"> 
		   		     				  <span class="rating">
									        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
	   		     				</div>
	   		     		</div>
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

include 'sidebar.php';

?>	   		    
<!--
				
	
	<!----><?php
	
	include 'footer.php';
	
	?>
</body>
</html>