
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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
<!--script-->
<script type="text/javascript">
$(document).ready(function(){
//alert("hii");
$("#test").keyup(function() {
    var val = $("#test").val();
    if (parseInt(val) < 0 || isNaN(val)) {
        alert("please enter valid values");
        $("#test").val("");
        $("#test").focus();
    }
});
});

</script>
</head>
<body> 
<?php
include '../database.php';
include 'user_header.php';

?>


<div class="container">

<div class="row">
<div class="col-md-12">

<?php

$eid=$_SESSION["uname"];

$cnt=new database();
$res=$cnt->count_display($eid);

$cntt=mysql_num_rows($res);


?>		
<h1 align="center">Your Cart Item (<?php echo $cntt; ?>)</h1>
<table class="table table-striped">
		<th>Product_pic</th>
		<th>Product_name</th>
		
		<th>Product_price</th>
		<th>Order_Date</th>
		<th>Quantity</th>
		<th>Total</th>
<th>Action</th>
<?php


$cnt1=new database();	
$res1=$cnt1->product_join_cart($eid);



while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
{
	echo "<tr><td>";
	echo     '<img src="../images/'.$row["product_img"].'" alt="..." style="height: 145px;"></td>';
    echo "<td>". $row["product_name"]."</td>";
    echo "<td>". $row["product_price"]."</td>";
    echo "<td>". $row["order_date"]."</td>";
//	echo "<td>". $row["qty"]."</td>";
echo '<form method="post" action="">
';
echo '<td><input type="number"  name="quty" value="'.$row["quantity"].'" id="test" size="3" min="1" maxlength="3" />
<input name="upbtn" value="update" class="acount-btn" type="submit"></button></td>';  
   // echo "<td>".$t=($row["amount"]*$row["qty"])."</td>";

	
	$id=$row["order_id"];
   echo "id is ".$id; 
 
   $p=$row["product_price"];
   echo "price is ".$p; 
 
		
//echo "qty is ".$q; 
  
	//echo "ans is ".$t; 
 

if(isset($_POST["upbtn"]))	
	{
		$q=$_POST["quty"];

		$t=$p*$q;	
		$con=mysql_connect("localhost","root","");
		mysql_select_db("medicine",$con);
		$res=mysql_query("update order_tbl set quantity='$q',total_price='$t' where order_id=$id");
		if($res==1)
		{
			header('location:cart_display.php');
		}
	}
	
	echo "<td>". $row["total_price"]."</td>";
	
  echo '<td><a href="del_cart.php?id='.$row["order_id"].'"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 
</button>
</a></td>';
    echo "</tr>";
	echo "</form>";

}

?>
		

<?php



$cnt=new database();
$res=$cnt->final_amount_cart_page($eid);

while($row=mysql_fetch_assoc($res))
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

		
<tr>
<td colspan="4"></td>
<td></td>
<td>
<a href="cartpage.php"  class="btn btn-primary" role="button" style="background-color: orangered;
width: 105px;
height: 42px;
font-size: larger;">Check_Out</a>
<!--<input  type="submit" name="btnchk" value="checkout" style="background-color: orangered;">
  <span class="glyphicon glyphicon-ok"     aria-hidden="true"></span> Check out
</button>
-->
</td>

		
		</tr>
<div>
</div>
</div>
		</table>
<?php
	
	include '../footer.php';
	
	?>
</body>
</html>