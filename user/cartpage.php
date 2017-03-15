<?php 
session_start();
$eid=$_SESSION["uname"];

?>
<html>
<head>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
    $newadd=$row["ship_address"];
}

?>
<!--<form action="" method="post" class="form-horizontal">-->
<form method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Update Address</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="update_add" cols="5" rows="5" required><?php echo $newadd;?></textarea>
    </div>
  </div>
<!--</form>-->
</br>
</br>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Add Prescription</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="add_presc" required>
      </br>
</br>
      <button type="submit" class="btn btn-success"  name="btnins" value="insert">Place Order</button>
    </div>
  </div>
</form>

<?php 

if(isset($_POST["btnins"]))
{
   
    $add=$_POST["update_add"];

    $obj1=new database();
    $result=$obj1->update_cart_address($add,$eid);
    /*
    $target_dir="images/";
	$target_file = $target_dir . basename($_FILES["add_presc"]["name"]);
	move_uploaded_file($_FILES["add_presc"]["tmp_name"], $target_file);*/

    $target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["add_presc"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["add_presc"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
echo '<script type="text/javascript">';
 echo "alert('File is not an image');";
   echo "</script>";
	       
	   $uploadOk = 0;
    }

// Check if file already exists
//if (file_exists($target_file)) {
  //  echo "Sorry, file already exists.";
    //$uploadOk = 0;
//}
// Check file size
/*if ($_FILES["txtphoto"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}*/
// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
echo "<Script>";
echo "alert('Sorry, your file was not uploaded')";
echo "</scipt>";
	// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["add_presc"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["add_presc"]["name"]). " has been uploaded.";
   
$obj=new database();


	$res=$obj->add_prescription($target_file,$eid);
  
$con=mysql_connect("localhost","root","");
mysql_select_db("medicine",$con);
$res=mysql_query("update order_tbl set status='buy' where email_id='$eid'",$con);

  header('location:plac_ord.php');
	
	} else {
//        echo "Sorry, there was an error uploading your file.";

echo '<script type="text/javascript">';
 echo "alert('Sorry, there was an error uploading your file');";
   echo "</script>";

		}
}




}
?>
</form>
</div>
</div>
</div>

</body>
</html>