
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
$res=$cnt->count_Fav($eid);

$cntt=mysql_num_rows($res);


?>		
<h1 align="center">Your Favourite Recipes (<?php  if($cntt==0){ echo "Empty"; }
else{ echo $cntt; } ?>)</h1>
<table class="table table-striped">
		<th>Racipe Photo</th>
		<th>Racipe Name</th>
		
		<th>Racipe Price</th>
		
<th>Add to cart</th>
<th>Action</th>


<?php


$cnt1=new database();	
$res1=$cnt1->Favourite_join($eid);



while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
{
	echo "<tr><td>";
	echo     '<img src="../images/'.$row["racipe_img"].'" alt="..." style="height: 145px; width:200px;"></td>';
    echo "<td>". $row["racipe_name"]."</td>";
    echo "<td>". $row["racipe_price"]."</td>";
 echo '<td>
<a href="wishlist1.php?pid='.$row["racipe_id"].'"><button type="button" style="width: 200px; background:#323A45; color:white; " name="btncar" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to cart
</button></a><br>
<a href="single.php?id='.$row["racipe_id"].'"><button type="button" style="width: 200px; background:#323A45; color:white; " name="btncar" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-shopping-watch" aria-hidden="true"></span> Preview
</button></a>

</td>';
 
  echo '<td><a href="delet_fav.php?fid='.$row["favourite_id"].'"><button  type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-trash" style="color: red;"  aria-hidden="true"></span> Remove 
</button>
</a></td>';
    echo "</tr>";
	echo "</form>";

}

?>
		


<div>
</div>
</div>
		</table>
<?php
	
	include 'footer.php';
	
	?>
</body>
</html>