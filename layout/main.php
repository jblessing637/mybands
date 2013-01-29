<?php
//display message if there is one in session data
if(isset($_SESSION['message'])){
	//display message
	echo "<div class=\"alert alert-error\">{$_SESSION['message']}</div>";
	unset($_SESSION['message']);
}
//store the 'p' parameter from the qs into a variable
if(isset($_GET['p'])) {
	$p=$_GET['p'];
}else {
	$p='list_bands';
}
include("views/$p.php");
?>