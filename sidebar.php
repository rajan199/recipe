
<?php 
//include 'database.php';
$res=new database();
$cnt=$res->sidebar_recipes_count();  
	
	/*
	$con=mysql_connect('localhost','root','');
    mysql_select_db('medicine',$con);
     
 $res1=mysql_query("select * from company_tbl",$con);
$cnt=mysql_num_rows($res1);
*/
?>


 <div class="clearfix"> </div>
	   		   </div>   
			   
			   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate" style="background:lightseagreen;">All Recipes<span class="badge"><?php echo $cnt;?></span></h3>
		 
		 <?php

/*
	$con=mysql_connect('localhost','root','');
    mysql_select_db('medicine',$con);
     
	$cnt1=mysql_query('select count(p.product_id) "cnt",c.* from product_tbl as p,company_tbl as c where p.company_id=c.company_id group by c.company_name',$con);
	*/

//	$res1=new database();
//$cnt1=$res->sidebar_recipes_display();  
	
		$con=mysql_connect('localhost','root','');
    mysql_select_db('racipe_database',$con);
     
	$cnt1=mysql_query('select * from racipe_tbl group by racipe_name',$con);

	
 while($row=mysql_fetch_array($cnt1))
  {

echo  '<ul class="menu">
				
				<ul class="kid-menu">
		
				<li><a href="fordisplay_res.php?id='.$row["racipe_id"].'" style="font-size: 14px;">'.$row["racipe_name"].'</a></li>
			</ul>
	</ul>';
	   		
  }
		?>
	</div>
</div>
<div class="clearfix"> </div>