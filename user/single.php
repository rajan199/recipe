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
<link rel="stylesheet" href="../css/etalage.css" type="text/css" media="all" />
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

<script src="../js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<body> 
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
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="login.html"><span> </span>LOGIN</a></li> |
								<li ><a href="register.html">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!---->
	
	<?php
	
	include '../database.php';
	include 'user_header.php';
	
	?>
	
	
	<div class="container">

<div class="row">
<div class="col-md-12">
<?php
include '../alphaser.php';

?>
</div>
</div>
</div>

	
	 <div class="container"> 
	 	<?php
		
		$id=$_REQUEST["id"];
		
		
		
/*
	$con=mysql_connect('localhost','root','');
    mysql_select_db('medicine',$con);
    $cnt1=mysql_query("select * from product_tbl where product_id=$id",$con);
*/	

$obj=new database();
//$cnt1=$obj->racipe_by_id($id);
$con=mysql_connect('localhost','root','');
    mysql_select_db('racipe_database',$con);
	$cnt1=mysql_query("select * from racipe_tbl where racipe_id=$id",$con);

	while($row=mysql_fetch_assoc($cnt1))	
	{
	 echo '	<div class=" single_top">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_source_image" src="../images/'.$row["racipe_img"].'" class="img-responsive" title="" />
								</a>
							</li>
						</ul>
						 <div class="clearfix"> </div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  
					
					<h4>Name :'.$row["racipe_name"].'</h4>
				<div class="cart-b">
					<div class="left-n ">Price :Rs'.$row["racipe_price"].'</div>
				    <a style="color: aquamarine;" class="now-get get-cart-in" href="wishlist1.php?pid='.$row["racipe_id"].'">ADD TO CART</a> 
				    <div class="clearfix"></div>
				 </div>
				 <br/>
				<h3>Ingredients: '.$row["racipe_ingredient"].'</h3>
				
				<hr/>
				<h3>Method :'.$row["method"].'</h3>
				<hr/>
				
				
				</div>
          	    <div class="clearfix"> </div>
          	   </div>';
			   
			   $rname=$row["racipe_name"];
			   
	}			
			?>
			<form method="post" action="">
			<h3>Comments</h3>
			<input type="text" name="comment" placeholder="Enter Comment" style="width:500px;height:70px;">
			<input type="submit" name="btn" class="acount-btn"  value="Add">

			<?php
			
			if(isset($_POST["btn"]))
			{
				
				$com=$_POST["comment"];
				$eid=$_SESSION["uname"];
					$con=mysql_connect('localhost','root','');
					mysql_select_db('racipe_database',$con);
					$res=mysql_query("insert into comment_tbl values('null','$com','$id','$eid')",$con);
					
				if($res>0)
				{
					header("location:single.php?id=$id");
				}
   
   
			}


			
			?>	
			<h3>All comments for <?php echo $rname; ?> </h3>
			<?php
					$con=mysql_connect('localhost','root','');
					mysql_select_db('racipe_database',$con);
					$res=mysql_query("select c.*,u.* from comment_tbl as c,user_tbl as u where c.email_id=u.email_id and c.racipe_id='$id' order by c.comment_id desc",$con);
	
					while($row=mysql_fetch_assoc($res))
		{
		echo "<hr>";
		echo '<div class="panel panel-default">
		
  <div class="panel-heading"><h3>User name : '.$row["user_name"].'</h3></div>
  <div class="panel-body">
    Comment : '.$row["comment"].'
	</div>
	<br>
	
  
</div> </hr>';
}
			
			?>
				</form>



			   
			  
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="../js/jquery.flexisel.js"></script>

          	   <?php
			   
			   include 'sidebar.php';
			   
			   ?>
          	    	
          	   </div>
          	   <!---->
	<!---->
	
	<?php
	
	include 'footer.php';
	
	?>
</body>
</html>