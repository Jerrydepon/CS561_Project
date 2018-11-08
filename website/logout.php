<?php 
   session_start();
   if($_POST['action'] == 'call_this') {
   	session_unset();
   
   $_SESSION['u_uid'] = NULL;
   header("Location: indexmain.php");
	}        
?>
