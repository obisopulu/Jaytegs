<?php

include("../services/header.php");

$ider = $z."ID";
$sql_update = mysqli_query($cxn, "DELETE FROM $z WHERE $ider = '$x' LIMIT 1 ") or die("xxx");
?>