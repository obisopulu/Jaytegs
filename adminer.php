<?php include("services/header.php");

function clean_input($data){
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}

if($logger){
	
	if($username == $siteUsername && $password == "$sitePassword") {$_SESSION["sessionStatus"] = "on"; ini_set('session.gc_maxlifetime', 3600);}else{$xxx = "xxx";}
	
}

if($outter){
	
	$sessionStatus = "useless RG";
	
}

if ($sessionStatus != "on"){
	
	if($gainer && $username1 && $password1 && $password2){
		mysqli_query($cxn, "UPDATE site SET siteUsername = '$username1', sitePassword = '$password2' WHERE siteID = '1' ") or die("gainer");
	}
?>
<!--splash-->
<div id="splash" style="bottom:0; z-index:100; position:fixed; height:100%; width:100%; background:url(img/<?php echo $siteBanner ?>) center no-repeat #000; background-size:contain; display:flex; align-items:center; justify-content:center; font-weight:900; transition:.5s"><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN</div>
<!--splash-->

<!--<!--orientation_error
<div id="orientation_error" style="bottom:0; z-index:100; position:fixed; height:100%; width:100%; display:flex; align-items:center; justify-content:center; font-weight:900; background:#111; padding:10px">
You can only use admin end in protriat mode.
<div style="font-weight:900; background:#F00; padding:10px; margin:10px">please rortate your device or resize window to continue</div>
</div>
orientation_error-->


<?php 

$site_sql = mysqli_query($cxn, "SELECT * FROM site");
while($row_site_sql = mysqli_fetch_assoc($site_sql)){extract($row_site_sql);
if(!$siteUsername){
?>
<table id="base"><tr><td align="center">


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<?php if($xxx){echo "&#9874;";}?>
<table style="font-weight:900; font-size:.9em; width:90%">
<tr><td style="width:30px; padding:15px;">&#9731;</td><td style="; border-bottom:thin #000 solid">
<input type="text" placeholder="username" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="username1" value="" required>
</td></tr><tr><td style="width:30px; padding:15px;">&#9741;</td><td style="; border-bottom:thin #000 solid">
<input type="password" placeholder="password" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="password1" value="" required>
</td></tr><tr><td style="width:30px; padding:15px;">&#9741;</td><td style="; border-bottom:thin #000 solid">
<input type="password" placeholder="repeat password" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="password2" value="" required>
</td></tr>
</table>

<input type="hidden" name="gainer" value="xxxxx">
<input type="submit" title="Change" value="Gain Access" style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px 50px"></div>
</form>


</td></tr></table>
<?php }else{ ?>
<table id="base"><tr><td align="center">


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<?php if($xxx){echo "&#9874;";}?>
<table style="font-weight:900; font-size:.9em; width:90%">
<tr><td style="width:30px; padding:15px;">&#9731;</td><td style="; border-bottom:thin #000 solid">
<input type="text" placeholder="username" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="username" value="" required>
</td></tr><tr><td style="width:30px; padding:15px;">&#9741;</td><td style="; border-bottom:thin #000 solid">
<input type="password" placeholder="password" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="password" value="" required>
</td></tr>
</table>

<input type="hidden" name="logger" value="xxxxx">
<input type="submit" title="Change" value="Login" style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px 50px"></div>
</form>


</td></tr></table>


<?php }

}?>



<script>
function _(el){return document.getElementById(el);}
function __(el){return document.getElementsByClassName(el);}
function ___(el){return document.getElementsByTagName(el);}
window.onload = function fluid(){
	_("splash").style.bottom = "-" + _("splash").offsetHeight + "px"; 
	_("base").style.height = window.innerHeight + "px";	
	/*if((window.innerWidth > window.innerHeight) && window.innerHeight < 500){
		 _("orientation_error").style.bottom = "0";
	}else{
		_("orientation_error").style.bottom = "-" + _("orientation_error").offsetHeight + "px";
	}*/
}
window.onresize = function fluid(){
	_("splash").style.display = "none"
	_("base").style.height = window.innerHeight + "px";	
	/*if((window.innerWidth > window.innerHeight) && window.innerHeight < 500){
		 _("orientation_error").style.bottom = "0";
	}else{
		_("orientation_error").style.bottom = "-" + _("orientation_error").offsetHeight + "px";
	}*/											//base
}
</script>
<?php

}else{
	
	
if($musicer){
	
	$music_category = clean_input($music_category);
	$music_details = clean_input($music_details);
	$site_audiomack = clean_input($site_audiomack);
	$site_itunes = clean_input($site_itunes);
	$site_soundcloud = clean_input($site_soundcloud);
	$site_spotify = clean_input($site_spotify);
	$site_tidal = clean_input($site_tidal);
	$site_youtube = clean_input($site_youtube);
	
	$music_arter = "jaytegs_".date("ymdsmi").".png";
	move_uploaded_file($_FILES["music_art"]["tmp_name"], "img/music/$music_arter") or die("Musíc art fie uplaod error");
	mysqli_query($cxn, "INSERT INTO music (musicID, music_category, music_details, music_art, site_audiomack, site_itunes, site_soundcloud, site_spotify, site_tidal, site_youtube, musicPreview, musicExternalLinkClick, dateUpdated) VALUES (NULL, '$music_category', '$music_details', '$music_arter', '$site_audiomack', '$site_itunes', '$site_soundcloud', '$site_spotify', '$site_tidal', '$site_youtube', '0', '0', '$today')") or die("musicer");
	$open_js_link = "xx";
}
if($picturer){
	
	$picture_filer = "jaytegs_".date("ymdsmi").".png";
	move_uploaded_file($_FILES["picture_file"]["tmp_name"], "img/gallery/$picture_filer") or die("Picture fie uplaod error");
	
	mysqli_query($cxn, "INSERT INTO gallery(galleryID, galleryDetails, galleryPicture, galleryPreview, dateUpdated) VALUES (NULL, '$picture_details', '$picture_filer', 0, '$today')") or die("picturer");
	$open_js_link = "xx";
}
if($banner){
	
	$banner_picturer = "jaytegs_banner".date("y_m_d").".png";
	move_uploaded_file($_FILES["banner_picture"]["tmp_name"], "img/$banner_picturer") or die("Picture fie uplaod error");
	
	mysqli_query($cxn, "UPDATE site SET siteBanner = '$banner_picturer' WHERE siteID = '1' ") or die("banner");
	$open_js_link = "xx";
}
if($external_links){
	mysqli_query($cxn, "UPDATE site SET siteTitle = '$siteTitle', siteDescription = '$siteDescription', siteBio = '$siteBio', siteEmail = '$siteEmail', siteInstagram = '$siteInstagram', siteTwitter = '$siteTwitter', siteAudiomack = '$siteAudiomack', siteItunes = '$siteItunes', siteSoundcloud = '$siteSoundcloud', siteSpotify = '$siteSpotify', siteTidal = '$siteTidal', siteYoutube = '$siteYoutube', dateUpdated = '$today' WHERE siteID = 1") or die("external_links");
	$open_js_link = "xx";
}


$gallery_sql = mysqli_query($cxn, "SELECT * FROM gallery ORDER BY galleryID DESC");
$music_sql = mysqli_query($cxn, "SELECT * FROM music ORDER BY musicID DESC");
$site_sql = mysqli_query($cxn, "SELECT * FROM site");
?>

<?php  
if($open_js_link){
	echo "<script>window.open ('adminer.php', '_self')</script>";
} 
?>
<!--splash-->
<div id="splash" style="bottom:0; z-index:100; position:fixed; height:100%; width:100%; background:url(img/<?php echo $siteBanner ?>) center no-repeat #000; background-size:contain; display:flex; align-items:center; justify-content:center; font-weight:900"><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN</div>
<!--splash-->

<!--orientation_error
<div id="orientation_error" style="bottom:0; z-index:100; position:fixed; height:100%; width:100%; display:flex; align-items:center; justify-content:center; font-weight:900; background:#111; padding:10px">
You can only use admin end in protriat mode.
<div style="font-weight:900; background:#F00; padding:10px; margin:10px">please rortate your device or resize window to continue</div>
</div>
orientation_error-->



<table id="base"><tr><td align="center">
<div  id="banner_desktop" style="top:0; z-index:1; position:fixed; height:120px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain; display:flex; align-items:center; justify-content:center; font-weight:900; font-size:.8em; display:none"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN</div>
<div  id="banner_mobile" style="height:120px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain; display:flex; align-items:center; justify-content:center; font-weight:900; font-size:.8em; display:none"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN</div>


<div id="framer" style="display:inline-block">


<?php

$day0 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day1 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day2 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day3 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day4 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day5 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day6 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day7 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day8 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day9 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day10 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;
$day11 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE dateUpdated = '$today' "))*1;


$dayMax = ceil(max($day0, $day1, $day2, $day3, $day4, $day5, $day6, $day7, $day8, $day9, $day10, $day11) / 10) * 10;
if($dayMax == 0){$dayMax = 1;}
?>


<div class="frames" style="float:left">
<table class="frames" style="background:rgba(0,0,0,.2); background-size:contain; border:thick #222 solid;"><tr valign="top"><td align="center">


<div style=" padding:5px 5px 10px 5px; font-size:.7em; text-align:right;">

<div style="font-size:1.1em; font-weight:900; text-align:center">ANALYTICS</div>

<table style="text-align:center"><tbody><tr valign="bottom"><td style="height:20px; width:50px;">
100
<div style="width:7px; background:#FFF; border-radius:1px; height:3px; display:inline-block"></div>
</td><td style="height:20px;">

</td></tr>

<tr valign="bottom"><td style="height:50px; width:20px;">
50
<div style="width:5px; background:#FFF; border-radius:1px; height:3px; display:inline-block"></div>
</td><td style="height:100px; width:250px;" rowspan="2" align="center">
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day0 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day1 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day2 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day3 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day4 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day5 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day6 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day7 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day8 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day9 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day10 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
<div style="width:2%; background:#FFF; border-radius:1px; display:inline-block; height:<?php echo ($day11 / $dayMax) * 100;?>px; margin:0 2.5%;"></div>
</td></tr>
<tr valign="bottom"><td style="height:50px; width:20px">
<div style="width:3px; background:#FFF; border-radius:1px; height:3px; display:inline-block"></div>
</td></tr>
<tr valign="top"><td style="width:20px">
</td><td style="height:20px; text-align:center">
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D');?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-1 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-2 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-3 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-4 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-5 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-6 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-7 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-8 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-9 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-10 days"));?></div>
<div style="width:2%; border-radius:1px; height:3px; margin:0 2.5%; display:inline-block"><?php echo date('D',strtotime("-11 days"));?></div>
</td></tr></tbody></table>
<div style="font-size:1em; text-align:left">
- daily user count. From today to 11 days ago
</div>
</div>

<?php 

$userMobile1 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE userPlatform = 'Mobile' "))*1;
$userDesktop1 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE userPlatform = 'Desktop' "))*1;

if($userMobile1 == 0){$userMobile1 = 1;}
if($userDesktop1 == 0){$userDesktop1 = 1;}
$userMobile = ($userMobile1/($userMobile1 + $userDesktop1)) * 100;
$userDesktop = ($userDesktop1/($userMobile1 + $userDesktop1)) * 100;


?>
<table style="font-weight:900; font-size:.9em; margin-bottom:20px; width:95%;"><tr><td style="background:#222; padding:5px; text-align:center" colspan="2">PLATFORM</td></tr>
<tr><td style="background:#222; width:88%; padding:10px">MOBILE</td><td style="background:#222; text-align:right; padding:5px">DESKTOP</td></tr>
<tr><td colspan="2">

<table><tr><td style="width:<?php echo $userMobile;?>%; background:#333; padding:5px"><?php echo $userMobile;?>%</td><td style="width:<?php echo $userDesktop;?>%; text-align:right; background:#222; padding:5px"><?php echo $userDesktop;?>%</td></tr></table>

</td></tr>
</table>

<?php 

$userDeviceA1 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE userDevice = 'ANDROID' "))*1;
$userDeviceI1 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE userDevice = 'iPhone' "))*1;
$userDeviceM1 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE userDevice = 'MacBook' "))*1;
$userDeviceW1 = mysqli_num_rows(mysqli_query($cxn, "SELECT * FROM user WHERE userDevice = 'WINDOWS' "))*1;

if($userDeviceA1 == 0){$userDeviceA1 = 1;}
if($userDeviceI1 == 0){$userDeviceI1 = 1;}
if($userDeviceM1 == 0){$userDeviceM1 = 1;}
if($userDeviceW1 == 0){$userDeviceW1 = 1;}
$userDeviceA = ($userDeviceA1/($userDeviceA1 + $userDeviceI1 + $userDeviceM1 + $userDeviceW1)) * 100;
$userDeviceI = ($userDeviceI1/($userDeviceA1 + $userDeviceI1 + $userDeviceM1 + $userDeviceW1)) * 100;
$userDeviceM = ($userDeviceM1/($userDeviceA1 + $userDeviceI1 + $userDeviceM1 + $userDeviceW1)) * 100;
$userDeviceW = ($userDeviceW1/($userDeviceA1 + $userDeviceI1 + $userDeviceM1 + $userDeviceW1)) * 100;


?>
<table style="font-weight:900; font-size:.9em; width:95%;"><tr><td style="background:#222; padding:5px; text-align:center" colspan="4">OPERATING SYSTEM
<table><tr><td style="width:25%; padding:5px">ANDROID</td><td style="width:25%;padding:5px">iPhone</td><td style="width:25%; padding:5px">MacBook</td><td style="padding:5px">WINDOWS</td></tr></table>
</td></tr>
<tr><td style="width:<?php echo $userDeviceA ?>%; background:#333; padding:10px"><?php echo $userDeviceA ?>%</td><td style="width:<?php echo $userDeviceI ?>%; text-align:right; background:#222; padding:10px"><?php echo $userDeviceI ?>%</td><td style="width:<?php echo $userDeviceM ?>%; text-align:right; background:#111; padding:10px"><?php echo $userDeviceM ?>%</td><td style="width:<?php echo $userDeviceW ?>%; text-align:right; background:#000; padding:10px"><?php echo $userDeviceW ?>%</td></tr>
</table>


<table style="font-weight:900; font-size:.9em; background:#222; width:95%">
<tr><td style="background:#222; padding:10px; text-align:center" colspan="3">DEMOGRAPHICS</td></tr>
<tr><td style="width:90%; padding:10px">COUNTRY</td><td style="text-align:right; padding:10px">PEOPLE</td><td style="text-align:right; padding:10px">VISITS</td></tr>
<?php

$country_sql = mysqli_query($cxn, "SELECT DISTINCT userCountry, COUNT(*) FROM user Group BY userCountry ORDER BY COUNT(*) DESC LIMIT 7");
while($row_country_sql = mysqli_fetch_assoc($country_sql)){
	extract($row_country_sql);
	$country_sql_count = mysqli_num_rows(mysqli_query($cxn, "SELECT FROM user WHERE userCountry = '$userCountry'"));
?>

<tr><td style="width:90%; padding:10px; background:#333;"><?php echo $userCountry ?></td><td style="text-align:right; padding:10px">54</td><td style="text-align:right; padding:10px"><?php echo $country_sql_count ?></td></tr

><?php }?>
</table>
<div style="margin:5px; font-size:.9em">
<div style="width:5px; height:5px; background:#F00; border-radius:5px; margin:5px; display:inline-block"></div>data includes search engine robots and other web crawlers
</div>


</td></tr></table>
</div>





<div class="frames" style="float:left">

<table class="frames" style="background:rgba(0,0,0,.2); background-size:contain; border:thick #222 solid;"><tr valign="top"><td align="center">
<div style="font-size:1.1em; font-weight:900; text-align:center; margin:10px">MUSIC</div>

<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<div style="background:url(img/music_art_pick.png) center no-repeat #222; background-size:contain; margin:0 10px; border-bottom:thin #000 solid">
<table><tr><td><input id="music_art_pick" type="file" accept="image/*" style="opacity:0; width:80%" name="music_art" required></td><td style="padding:5px; font-weight:900" id="music_art_check">&#9862;</td></tr></table></div>
<input type="text" placeholder="Title" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="music_details" value="" required>


<table style="font-weight:900; font-size:.9em; width:90%">
<tr><td style="width:30px; padding:15px; background:url(img/stream_audiomack.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Audiomack page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="site_audiomack" value="">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_itunes.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your iTunes page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="site_itunes" value="">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_soundcloud.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Soundcloud page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="site_soundcloud" value="">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_spotify.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Spotify page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="site_spotify" value="">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_tidal.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Tidal page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="site_tidal" value="">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_youtube.png) center no-repeat; background-size:contain;"></td><td style="">
<input type="url" placeholder="link to your Youtube page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="site_youtube" value="">
</td></tr>
</table>

<table><tr><td align="center">
  <select id="cars" name="music_category" style="margin:5px 10px; padding:10px; width:88%; background:#222" required>
  	<option disabled="disabled">Category</option>
    <option value="Song">Song</option>
    <option value="Beat">Beat</option>
  </select>
</td><td>
<input type="hidden" name="musicer" value="xxxxx">
<input type="submit" title="Change" style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px 50px"></div>
</form>
</td></tr></table>


<div id="gallery_window_grid" style="padding:10px; height:230px; border-top:thick #222 solid; overflow:scroll;">


<?php 
while($row_music_sql = mysqli_fetch_assoc($music_sql)){extract($row_music_sql);
?>

<table style="margin-bottom:15px; border-bottom:thick #222 solid">
<tr><td style="background:url(img/music/<?php echo $music_art ?>) center no-repeat; background-size:contain; height:50px; width:30%" rowspan="2"></td><td colspan="2"><?php echo $music_details ?></td><td rowspan="2">
<div style="background:url(img/delete.png) center no-repeat #F33; background-size:contain; border-radius:5px; height:30px; width:30px;" onclick="delete_dialoger('<?php echo $musicID ?>','<?php echo $music_details ?>','music')"></div>
</td></tr>
<tr><td style="width:20%"><div  style="font-size:.7em">preview</div><?php echo $musicPreview ?></td><td style="width:40%"><div  style="font-size:.7em">External Link click</div><?php echo $musicExternalLinkClick ?></td></tr>
</table>

<?php 
}
?>
</div>


</td></tr></table>
</div>





<div class="frames" style="float:left">
<table class="frames" style="background:rgba(0,0,0,.2); background-size:contain; border:thick #222 solid;"><tr valign="top"><td align="center">
<div style="font-size:1.1em; font-weight:900; text-align:center; margin:10px">GALLERY</div>

<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<div style="background:url(img/picture_pick.png) center no-repeat #222; background-size:contain; margin:0 10px; border-bottom:thin #000 solid">
<table><tr><td><input id="picture_pick" type="file" accept="image/*" style="opacity:0; width:80%" name="picture_file"></td><td style="padding:5px; font-weight:900;" id="picture_check">&#9863;</td></tr></table>
</div>
<textarea placeholder="Bio - Visible on Homepage. please keep it simple" rows="2"  style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px; width:88%; font-family:myFirstFont; resize:none" name="picture_details"></textarea><input type="hidden" name="picturer" value="xxxxx">
<div align="right"><input type="submit" title="Change" style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px 50px"></div>
</form>

<div id="gallery_window_grid" style="padding:10px; height:475px; border-top:thick #222 solid; overflow:scroll">
<?php 
while($row_gallery_sql = mysqli_fetch_assoc($gallery_sql)){extract($row_gallery_sql);
?>
<table style="margin-bottom:15px; border-bottom:thick #222 solid">
<tr><td style="background:url(img/gallery/<?php echo $galleryPicture ?>) center no-repeat; background-size:contain; height:50px; width:30%" rowspan="2"></td><td colspan="1"><?php echo $galleryDetails ?></td><td rowspan="2">
<div style="background:url(img/delete.png) center no-repeat #F33; background-size:contain; border-radius:5px; height:30px; width:30px;" onclick="delete_dialoger('<?php echo $galleryID ?>','<?php echo $galleryDetails ?>','gallery')"></div>
</td></tr>
<tr><td style="width:20%"><div  style="font-size:.7em">preview</div><?php echo $galleryPreview ?></td></tr>
</table>
<?php 
}
?>

</div>

</td></tr></table>
</div>





<div class="frames" style="float:left">
<table class="frames" style="background:rgba(0,0,0,.2); background-size:contain; border:thick #222 solid;">
<tr valign="top"><td align="center">
<div style="font-size:1.1em; font-weight:900; text-align:center; margin:10px">SITE MANAGEMENT</div>

<div style="background:url(img/banner_pick.png) left no-repeat #111; background-size:contain; margin:10px; width:90%">
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<table><tr><td style="background:"><input id="banner_pick" type="file" accept="image/*" style="opacity:0; width:80%" name="banner_picture" value=""></td>
<td style="font-weight:900" id="banner_check">&star;</td>
<td style="font-weight:900" id="banner_check"><div align="right">
<input type="hidden" name="banner" value="xxxxx"><input type="submit" title="Change" style="margin-left:10px; border-bottom:thin #000 solid; background:#222; padding:10px 40px"></div></td></tr></table>
</form>
</div>



<?php 
while($row_site_sql = mysqli_fetch_assoc($site_sql)){extract($row_site_sql);}
?>

<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div style="padding:5px; width:90%; background:#111">
<input type="text" placeholder="Title - Visible on search engines and brower tabs" max="15" style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px; width:88%;" name="siteTitle" value="<?php echo $siteTitle ?>">
<input type="text" placeholder="Description - Visible on search engines" max="200" style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px; width:88%; resize:vertical" name="siteDescription" value="<?php echo $siteDescription ?>">
<textarea placeholder="Bio - Visible on Homepage. please keep it simple" rows="2"  style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px; width:88%; font-family:myFirstFont; resize:none" name="siteBio"><?php echo $siteBio ?></textarea>

<table style="font-weight:900; font-size:.9em; width:95%">
<tr><td style="padding:10px; text-align:center" colspan="2">EXTERNAL LINKS</td></tr>
<tr><td style="width:30px; padding:15px; background:url(img/social_instagram.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Instagram page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteInstagram" value="<?php echo $siteInstagram ?>">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/social_twitter.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Twitter page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteTwitter" value="<?php echo $siteTwitter ?>">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_audiomack.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Audiomack page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteAudiomack" value="<?php echo $siteAudiomack ?>">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_itunes.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your iTunes page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteItunes" value="<?php echo $siteItunes ?>">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_soundcloud.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Soundcloud page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteSoundcloud" value="<?php echo $siteSoundcloud ?>">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_spotify.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Spotify page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteSpotify" value="<?php echo $siteSpotify ?>">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_tidal.png) center no-repeat; background-size:contain;"></td><td style="; border-bottom:thin #000 solid">
<input type="url" placeholder="link to your Tidal page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteTidal" value="<?php echo $siteTidal ?>">
</td></tr><tr><td style="width:30px; padding:15px; background:url(img/stream_youtube.png) center no-repeat; background-size:contain;"></td><td style="">
<input type="url" placeholder="link to your Youtube page" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteYoutube" value="<?php echo $siteYoutube ?>">
</td></tr>
</table>


<table style="font-weight:900; font-size:.9em; width:95%;"><tr><td style="width:30px; padding:5px; font-size:1.5em">&commat;</td><td style="">
<input type="email" placeholder="Your contact email address" max="15" style="margin:5px 10px; background:#222; padding:10px; width:88%;" name="siteEmail" value="<?php echo $siteEmail ?>">
</td></tr></table>


<input type="hidden" name="external_links" value="xxxxx">
<div align="right" style="margin:10px 0 7px 0"><input type="submit" title="Change" style="margin-left:10px; border-bottom:thin #000 solid; background:#222; padding:10px 40px">
</div>
</td></tr></table>
</form>
</div>













</td></tr>
<tr><td style="width:100%; padding:20px; text-align:center; height:40px">
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="outter" value="xxxxx">
<input type="submit" title="Change" value="Logout" style="margin:5px 10px; border-bottom:thin #000 solid; background:#222; padding:10px 50px"></div>
</form>
 <br />
2020 &copy; jaytegs.com &nbsp; 
<a href="https://www.instagram.com/uselessrg/" target="_blank"><div style="color:#555">crafted by UselessRG - contact Me here</div></a>
</td></tr></table>


<table id="delete_dialog" style="z-index:4; position:fixed; bottom:-2000px; width:100%; height:40px; center no-repeat #333; background-size:contain; transition:.5s">
<tr><td style="height:60%; background:rgba(0,0,0,.5)" onclick="close_delete_dialog()"></td></tr>
<tr><td style="height:20%; background:#000" align="center">

Are you sure you want to delete <div id="delete_file_name" style="background:#111; padding:10px"></div>

<table style="width:50%; height:50px; text-align:center">
<tr><td style="width:50%"><div style="background:#0D47A1; border-radius:10px; padding:15px 20px; margin:10px;20px; border:thin #000 solid" onclick="close_delete_dialog()">No</div></td>
<td><div style="background:#F33; border-radius:10px; padding:15px 20px; margin:10px;20px; border:thin #000 solid" onclick="yes_delete()">Yes</div></td></tr>
</table>

</td></tr>
<tr><td style="height:20%; background:rgba(0,0,0,.5)" onclick="close_delete_dialog()"></td></tr></table>

<script>
function _(el){return document.getElementById(el);}
function __(el){return document.getElementsByClassName(el);}
function ___(el){return document.getElementsByTagName(el);}
window.onload = function fluid(){
	_("splash").style.bottom = "-" + _("splash").offsetHeight + "px"; 
	_("base").style.height = window.innerHeight + "px";	
	x = __("frames")
	for (i = 0; i < x.length; i++) {	
	x[i].style.height = 703 + "px"
	}
	fluidiy()
}
window.onresize = function fluid(){
	_("splash").style.display = "none"
	_("base").style.height = window.innerHeight + "px";	
	x = __("frames")
	for (i = 0; i < x.length; i++) {
	x[i].style.height = 703 + "px"	
	}		
	fluidiy()												//base
}




function fluidiy(){
	/*if((window.innerWidth > window.innerHeight) && window.innerHeight < 100){
		 _("orientation_error").style.bottom = "0";
	}else{
		_("orientation_error").style.bottom = "-" + _("orientation_error").offsetHeight + "px";
	}*/
	
	

	if(window.innerWidth < 500){
		x = __("frames")
		for (i = 0; i < x.length; i++) {	
		x[i].style.width = window.innerWidth * 0.9 + "px"
		x[i].style.margin = "0"
		x[i].style.marginTop = "10px"
		}
		_("framer").style.width = window.innerWidth * 0.9 + "px"
		_("banner_mobile").style.display = "block";
		_("banner_desktop").style.display = "none";
	}else{
		x = __("frames")
		for (i = 0; i < x.length; i++) {	
		x[i].style.width = window.innerWidth * .23 + "px"
		x[i].style.margin = "10px"
		}
		_("framer").style.width = "auto"
		_("banner_mobile").style.display = "none";
		_("banner_desktop").style.display = "block";
	}
}


document.getElementById('banner_pick').onchange = function () {
  if(this.value){_("banner_check").innerHTML = "&starf;"}else{_("banner_check").innerHTML = "&star;"}
};
document.getElementById('picture_pick').onchange = function () {
  if(this.value){_("picture_check").innerHTML = "&#9865;"}else{_("picture_check").innerHTML = "&#9863;"}
};
document.getElementById('music_art_pick').onchange = function () {
  if(this.value){_("music_art_check").innerHTML = "&#9864;"}else{_("music_art_check").innerHTML = "&#9862;"}
};

function close_delete_dialog(){
	_("delete_dialog").style.bottom = -window.innerHeight * 2 + "px";
}
var xa = "";
var ya = "";
var za = "";
function delete_dialoger(x,y,z){
	_("delete_dialog").style.height = window.innerHeight + "px";
	_("delete_dialog").style.bottom = 0;
	_("delete_file_name").innerHTML = y;
	xa = x;
	ya = y;
	za = z;	
}

function yes_delete() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			_("delete_dialog").style.bottom = -window.innerHeight * 2 + "px";
			location.reload();
		}
	};
	xhttp.open("GET", "services/deleter.php?x=" + xa + "&z=" + za, true);
	xhttp.send();
}
</script>


<?php

}

?>