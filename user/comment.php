<?php

session_start();




if(isset($_POST["btn"]))
			{
				$rid=$_SESSION["rid"];
				$com=$_POST["comment"];
				$eid=$_SESSION["uname"];
					$con=mysql_connect('localhost','root','');
					mysql_select_db('racipe_database',$con);
					$res=mysql_query("insert into comment_tbl values('null','$com','$rid','$eid')",$con);
					
				if($res>0)
				{
					header('location:single.php');
				}
   
			}



?>