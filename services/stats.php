<?php

include("../services/header.php");

$ider = $y."ID";
$previewer = $y."Preview";


$melc = mysqli_query($cxn, "SELECT * FROM music WHERE musicID = '$x'");
while($row_melc = mysqli_fetch_assoc($melc)){extract($row_melc);}
$musicExternalLinkClick .= "$userIP,";
$musicPreview .= "$userIP,";

$gP = mysqli_query($cxn, "SELECT * FROM gallery WHERE galleryID = '$x'");
while($row_gP = mysqli_fetch_assoc($gP)){extract($row_gP);}
$galleryPreview .= "$userIP,";


if($y == "music"){
	$previewerValue = $musicPreview;
	
	echo "__url(img/music/$music_art) center no-repeat #111"."__".$music_details."__".$site_audiomack."__".$site_itunes."__".$site_soundcloud."__".$site_spotify."__".$site_tidal."__".$site_youtube;
}else{
	$previewerValue = $galleryPreview;
	echo "__center no-repeat url(img/gallery/$galleryPicture)"."__".$galleryDetails;
}
if($z){
	mysqli_query($cxn, "UPDATE music SET musicExternalLinkClick = '$musicExternalLinkClick' WHERE musicID = '$x' ");
}else{
	mysqli_query($cxn, "UPDATE $y SET $previewer = '$previewerValue' WHERE $ider = '$x' ");
}
?>