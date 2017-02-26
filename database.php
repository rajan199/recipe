<?php
class database
{
   public function signup($id,$uname,$pass,$add,$city,$zip,$gen,$mob,$temp)
   {
	   
	

   $con=mysql_connect('localhost','root','');
   mysql_select_db('medicine',$con);
   $res=mysql_query("insert into user_tbl values('$id','$uname','$pass','$add','$city','$zip','$gen','$mob','$temp','user')");
   }

 
 
 

	public function login($name,$passs)
   {
	$con=mysql_connect('localhost','root','');
   mysql_select_db('medicine',$con);
   $res=mysql_query("select * from user_tbl where email_id='$name' and  password='$passs' ",$con);
   $count=mysql_num_rows($res);  
   return $count;  
   
   } 
   

public function connection()
{
    
	$con=mysql_connect('localhost','root','');
    mysql_select_db('medicine',$con);
    return $con;
}




   public function companybyid($id)
   {
	   
	   $res=mysql_query("select * from product_tbl where company_id='$id'");
	   return $res;
   }

}
   
 ?>

 
<!--   
   public function update($name,$mob,$city,$gender,$mail)
   {
	   	$con=mysql_connect('localhost','root','');
    mysql_select_db('shopping',$con);
    $res=mysql_query("update user_tbl set User_name='$name',Mobile_no='$mob',City='$city',Gender='$gender' where Email_id='$mail'",$con);
return $res;
	   
   }

   public function insert_cat($name)
   {
	    $con=mysql_connect('localhost','root','');
        mysql_select_db('shopping',$con);
		$res=mysql_query("insert into cat (cat_name) values('$name')");
		
	   
   }
public function dis1()
{

	
	$res=mysql_query("select * from cat",$this->connection());
	return $res;
}   


public function insert_pro($name,$des,$price,$soh,$mfg,$war,$clr,$target_file,$id)
   {
	    $con=mysql_connect('localhost','root','');
        mysql_select_db('shopping',$con);
		$res=mysql_query("insert into pro_tbl values('NULL','$name','$des','$price',$soh,'$mfg','$war','$clr','$target_file',$id)");
		
	   
   }

   
   
   
   
   
   
   public function orddis($price,$d,$id,$eid,$qty,$cart)
   {
	   
	   $res=mysql_query("insert into ord_tbl values('NULL','$price','$d','$id','$eid','$qty','$cart')",$this->connection());
	   return $res;
	   
   }
   
   
   public function joinee($eid)
   {
	   $res=mysql_query("select p.*,o.* from pro_tbl as p,ord_tbl as o where o.flag='Cart' and fk_pro_id=pro_id and fk_email_id='$eid'",$this->connection());
	   return $res;
	   
   }
   
   
   public function delcart($id){
	   
	   $res=mysql_query("delete  from ord_tbl where pk_ord_id='$id'",$this->connection());
return $res;
	   
   }
   
   
   
   public function delcat($id){
	   
	   $res=mysql_query("delete  from cat where cat_id='$id'",$this->connection());
	  
return $res;
	   
   }
   
   
   public function pro_edit($id)
   {
	   
	   $res=mysql_query("select * from pro_tbl where pro_id='$id'",$this->connection());
	   return $res;

	   
   }
   
   
   public function total($eid)
   {
	   $res=mysql_query("select sum(amount) as 'amt' from ord_tbl where fk_email_id='$eid' and flag='Cart'",$this->connection());
	   return $res;

	   
   }
   
   
   public function cont($eid)
   {
	   
	   $res=mysql_query("select * from ord_tbl where fk_email_id='$eid' and flag='Cart'",$this->connection());
	   return $res;

	   
   }

public function update_ord($id)
{
	   $res=mysql_query("update ord_tbl set flag='Buy' where fk_email_id='$id'",$this->connection());
	   return $res;

	
}


   public function his($eid)
   {
	   $res=mysql_query("select p.*,o.* from pro_tbl as p,ord_tbl as o where o.flag='Buy' and fk_pro_id=pro_id and fk_email_id='$eid'",$this->connection());
	   return $res;
	   
   }
   

public function his_cnt($eid)
   {
	   
	   $res=mysql_query("select * from ord_tbl where fk_email_id='$eid' and flag='Buy'",$this->connection());
	   return $res;

	   
   }

   
   
   public function his_total($eid)
   {
	   $res=mysql_query("select sum(amount) as 'amt' from ord_tbl where fk_email_id='$eid' and flag='Buy'",$this->connection());
	   return $res;

	   
   }
   
   
   public function copy($id,$eid)
   {
	   $res=mysql_query("select * from ord_tbl where fk_email_id='$eid' and fk_pro_id='$id' and flag='Cart'",$this->connection());
	   $cnt=mysql_num_rows($res);
	   return $cnt;

   }
   
   
   
   		public function getuserbycode($code)
	{
		
		$res=mysql_query("select * from user_tbl where link='$code'",$this->connection());

		$count=mysql_num_rows($res);
		
		return $count;
	
	}
	public function activateuser($code)
	{
	
		$res=mysql_query("update user_tbl set active='true' where link='$code'",$this->connection());
		return $res;
	
	}
	
   
}

?>