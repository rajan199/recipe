			   
			 <?php

			 session_start();
			 


if(isset($_POST["txtsign"]))
{

//mysql_real_escape_string() escapses special characters in the string for use in an sql statement

	
	   $id=mysql_real_escape_string($_POST["txtid"]);
   $uname=$_POST["txtname"];
   $pass=$_POST["txtpass"];
   $add=$_POST["txtadd"];
   $city=$_POST["txtcity"];
   $zip=$_POST["txtzip"];
   $gen=$_POST["txtgen"];
   
   $mob=$_POST["txtno"];
   
   
//   $random_alpha = md5(rand());
 //  $captcha = substr($random_alpha, 0, 10);
 //  $code=$_POST["txtid"].$captcha;
	$ship="null";
//	$active="false";
	

	$con=mysql_connect('localhost','root','');
   mysql_select_db('racipe_database',$con);
   $res11=mysql_query("select * from user_tbl where email_id='$id'");
  $cntt=@mysql_num_rows($res11);
if($cntt==0)
{
if(count($_POST)>0) 
{

  $pass2=mysql_real_escape_string($_POST["txtpaswd"]);
  $pass1=$_POST["txtpass"];
  
  $enc_pass=md5($pass2);
   
  if($pass2==$pass1)
  {
  include 'database.php';
//$res=new  database();
//$res->signup($id,$uname,$pass,$add,$city,$zip,$gen,$mob,$temp);
/*
   $con=mysql_connect('localhost','root','');
   mysql_select_db('medicine',$con);
   $res=mysql_query("insert into user_tbl values('$id','$uname','$pass','$add','$city','$zip','$gen','$mob','$temp','user')");
  */
  //md5() calculate the md5 hash of string
  $date=date("d/m/y");

  $obj=new database();
  $res=$obj->insert_user($id,$uname,$enc_pass,$add,$city,$zip,$mob,$gen,$ship); 
	
		echo '<script type="text/javascript">';
 echo "alert('Registered Successfully ');";
 echo "window.location = 'login.php';";

 echo "</script>"; 

//header('location:login.php');

  }	  
  

else
{
	/*
	echo "<h3>";
	echo "Please confirm correct password";
	echo "</h3>";
	*/
	echo '<script type="text/javascript">';
 echo "alert('Please Confirm the correct password');";
 echo "window.location = 'register.php';";

 echo "</script>"; 
}



}
/*
else{
echo "<h3>";
echo "Enter Correct Captcha Code";
echo "</h3>";

}*/
}
else
{
	
	echo '<script type="text/javascript">';
	echo "alert('Email Id is already exists');";
	echo "window.location = 'register.php';";
 
   echo "</script>";
	
}
}
else if(isset($_POST["txtcancle"]))
{
	header('location:main.php');
}






?>
