			   
			 <?php

			 session_start();
			 


if(isset($_POST["txtsign"]))
{
	
	   $id=$_POST["txtid"];
   $uname=$_POST["txtname"];
   $pass=$_POST["txtpass"];
   $add=$_POST["txtadd"];
   $city=$_POST["txtcity"];
   $zip=$_POST["txtzip"];
   $gen=$_POST["txtgen"];
   
   $mob=$_POST["txtno"];
   
   
   
   $random_alpha = md5(rand());
   $captcha = substr($random_alpha, 0, 10);
   $code=$_POST["txtid"].$captcha;
	$temp="null";
	$active="false";
	

if(count($_POST)>0) {
if($_POST["captcha_code"]==$_SESSION["captcha_code"]){	
  $pass=$_POST["txtpaswd"];
  $pass1=$_POST["txtpass"];
  
  if($pass==$pass1)
  {
  include 'database.php';
//$res=new  database();
//$res->signup($id,$uname,$pass,$add,$city,$zip,$gen,$mob,$temp);
/*
   $con=mysql_connect('localhost','root','');
   mysql_select_db('medicine',$con);
   $res=mysql_query("insert into user_tbl values('$id','$uname','$pass','$add','$city','$zip','$gen','$mob','$temp','user')");
  */
  $date=date("d/m/y");

  $obj=new database();
  $res=$obj->insert_user($id,$uname,$pass,$add,$city,$zip,$gen,$mob,$temp,$active,$code,$date); 


header('location:login.php');
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
   echo "</script>";
	
}
}

else{
//echo "<h3>";
//echo "Enter Correct Captcha Code";
//echo "</h3>";


	echo '<script type="text/javascript">';
 echo "alert('Please enter the correct Capthcha code');";
   echo "</script>";
	




}
}
else if(isset($_POST["txtcancle"]))
{
	header('location:main.php');
}
/*
else{
echo "<h3>";
echo "Enter Correct Captcha Code";
echo "</h3>";

}*/
}




			error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
			require_once "phpmailer/class.phpmailer.php";

				$captcha_code="http://localhost/phpmedicine/phpmedicine/x.php?id=".$code;

				$message = $captcha_code;


			// creating the phpmailer object
			$mail = new PHPMailer(true);

			// telling the class to use SMTP
			$mail->IsSMTP();

			// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
			$mail->SMTPDebug = 0;

			// enable SMTP authentication
			$mail->SMTPAuth = true;

			// sets the prefix to the server
			$mail->SMTPSecure = 'ssl';

			// sets GMAIL as the SMTP server
			$mail->Host = 'smtp.gmail.com';

			// set the SMTP port for the GMAIL server
			$mail->Port = 465;

			// your gmail address
			$mail->Username = 'maildemo254@gmail.com';

			// your password must be enclosed in single quotes
			$mail->Password = 'maildemo1234';

			// add a subject line
			$mail->Subject = ' Verification for Website ';

			// Sender email address and name
			$mail->SetFrom('shoppingcart606@gmail.com', 'Jay Jalaram Medicines');

			$email1=$_POST["txtid"];
			// reciever address, person you want to send
			$mail->AddAddress($email1);

			// if your send to multiple person add this line again
			//$mail->AddAddress('tosend@domain.com');

			// if you want to send a carbon copy
			//$mail->AddCC('tosend@domain.com');


			// if you want to send a blind carbon copy
			//$mail->AddBCC('tosend@domain.com');

			// add message body
			$mail->MsgHTML($message);


			// add attachment if any
			//$mail->AddAttachment('time.png');

			try {
			    // send mail
				
				
			    $mail->Send();
			    $msg = "Mail send successfully";
			} catch (phpmailerException $e) {
			    $msg = $e->getMessage();
			} catch (Exception $e) {
			    $msg = $e->getMessage();
			}



?>
