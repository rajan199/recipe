<?php 

session_start();


			  if(isset($_POST["btnsub"]))
			  {
				  
				  $eid=$_SESSION["uname"];
				  $rec_name=$_POST["txtrecname"];
				  $ingred=$_POST["txting"];
			  $method=$_POST["txtmethod"];
			  $pri=$_POST["txtpri"];
			 
    $target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["txt_img"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["txt_img"]["tmp_name"]);
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
    if (move_uploaded_file($_FILES["txt_img"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["txt_img"]["name"]). " has been uploaded.";



			 
			  $con=mysql_connect("localhost","root","");
			  mysql_select_db("racipe_database",$con);
			  $res=mysql_query("Insert into racipe_tbl values(NULL,'$rec_name','$target_file','$ingred','$method','$pri','available','$eid')",$con);
			  
			  if($res==1)
				{
					header('location:user_profile.php');
				}
			 	}
				
}
			  }
			  ?>