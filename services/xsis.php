<?php

error_reporting(E_NOTICE); 
set_error_handler('pc_error_handler');
function pc_error_handler($errno, $error, $file, $line, $context) 
{ $message = ""; print "$message";}

$dbroot = 'root';
$dbpsw = '';
$dbname = 'jaytegs_db';


$cxn = mysqli_connect("localhost", $dbroot, $dbpsw);
if(!$cxn){
	header("Location : 404.htm");
}

if (!mysqli_select_db ($cxn, $dbname)) {
	include("xbot.php");
}else{
	mysqli_select_db ($cxn, $dbname);
}

session_start();


/*if($act=='Logout'){
	$_SESSION["sessionStatus"] = "";
	unset($_SESSION );
	session_destroy();
	}*/


extract($_POST);
extract($_SESSION);
?>