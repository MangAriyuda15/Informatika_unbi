<?php 
if(isset($_GET["english"])){
	include "english.php" ;
		}
else if(isset($_GET["indo"])){
	include "indo.php" ;
	}
else{
	include "indo.php";
	}
?>