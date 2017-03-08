<form method="post">
		<input type="text" value="" name="sercha" id="search-box"  >
						<input type="submit" name="btnsera" value="SEARCH">
		
							<?php
				if(isset($_POST["btnsera"]))
				{
					$_SESSION["ser"]=$_POST["sercha"];
					header('location:skin_ser.php');
				}
			
			?>
			
			</form>