<?php 
session_start();


if($_SESSION["uname"]=="")
{
	header('location:../login.php');
}

$eid=$_SESSION["uname"];

?>
<html>
<title>Recipe Express</title>

<head><link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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

</br>
</br>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php 
$obj2=new database();
$get_result=$obj2->get_selected_address_of_user($eid);
while($row=mysql_fetch_array($get_result,MYSQL_ASSOC))
{
    $newadd=$row["address"];
}

?>
<!--<form action="" method="post" class="form-horizontal">-->
<form method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Shipping Address</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="update_add" cols="5" rows="5" required><?php echo $newadd;?></textarea>
    </div>
  </div>
<!--</form>-->
</br>
</br>


  <div class="form-group">
    
    <div class="col-sm-10">
    
</br>
      <button type="submit" class="btn btn-success"  name="btnins" value="insert">Cash on Delivery</button>
    </div>
  </div>
</form>

<?php 

if(isset($_POST["btnins"]))
{
   
   $con=mysql_connect("localhost","root","");
   mysql_select_db("racipe_database",$con);
   $res=mysql_query("select * from order_tbl where email_id='$eid' and status='cart'",$con);
   $nt=mysql_num_rows($res);
   if($nt>0)
   {
    $add=$_POST["update_add"];

    $obj1=new database();
    $result=$obj1->update_cart_address($add,$eid);
    
$con=mysql_connect("localhost","root","");
mysql_select_db("racipe_database",$con);
$res=mysql_query("update order_tbl set status='buy' where email_id='$eid'",$con);

  header('location:plac_ord.php');
	
	} 
}



?>
</form>
</div>
</div>
</div>

<div class="container">

<div class="row">
<div class="col-md-12">

<?php

$eid=$_SESSION["uname"];

//$cnt=new database();
//$res=$cnt->history_count($eid);
$con=mysql_connect('localhost','root','');
    mysql_select_db('racipe_database',$con);
	$res=mysql_query("select * from order_tbl where email_id='$eid' and status='cart'",$con);

	
	
$cntt=mysql_num_rows($res);


?>		
<h1 align="center">Your Order Summary (<?php  if($cntt==0){ echo "Empty"; }
else{ echo $cntt; } ?>)</h1>
<table class="table table-striped">
		<th>Recipe Photo</th>
		<th>Recipe Name</th>
		
		<th>Recipe Price</th>
		<th>Order Date</th>
		<th>Quantity</th>
		<th>Total</th>
<?php


//$cnt1=new database();	
//$res1=$cnt1->product_join_history($eid);
	$res1=mysql_query("select r.*,o.* from racipe_tbl as r,order_tbl as o where r.racipe_id=o.racipe_id and o.email_id='$eid' and o.status='cart' order by o.order_id desc ",$con);
	


while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
{
	echo "<tr><td>";
	echo     '<img src="../images/'.$row["racipe_img"].'" alt="..." style="height: 145px;"></td>';
    echo "<td>". $row["racipe_name"]."</td>";
    echo "<td>". $row["racipe_price"]."</td>";
    echo "<td>". $row["order_date"]."</td>";
//	echo "<td>". $row["qty"]."</td>";
    echo "<td>". $row["quantity"]."</td>";
    echo "<td>". $row["total_price"]."</td>";

	

}

?>
		

<?php



//$cnt=new database();
//$res=$cnt->final_amount_history_page($eid);

	$res2=mysql_query("select sum(total_price) as 'total_amount' from order_tbl where email_id='$eid' and status='cart'",$con);
	
while($row=mysql_fetch_assoc($res2))
{
	$amt=$row["total_amount"];
}



?>


<tr>
<td colspan="3"></td>
<td></td>
<td><h3>Total</h3></td>
<td><h3><?php echo $amt; ?></h3></td>
</tr>

		
<div>
</div>
</div>
		</table>
<a href="cart_display.php" name="chek" class="btn btn-primary" role="button" style="background-color: orangered;
width: 300px;
height: 42px;
font-size: larger;">Want to Update Cart ?</a>


<?php
	
	include 'footer.php';
	
	?>
</body>
</html>