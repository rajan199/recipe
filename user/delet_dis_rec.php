<?php
$fid=$_REQUEST["fid"];
include '../database.php';


$cnt=new database();

$con=mysql_connect("localhost","root","");
mysql_select_db("racipe_database",$con);
$res=mysql_query("delete from racipe_tbl where racipe_id='$fid'",$con);

if($res==1)
{
	header('location:dis_recipe.php');
}

?>