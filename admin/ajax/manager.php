<?php  

include('../function/function.php');


 if(isset($_POST['str']) && $_POST['str']=="setcatid"){
		 $catid =	trim($_POST['catid']);
		echo $_SESSION['catid']=$catid;
		exit;
		
 }
 ?>