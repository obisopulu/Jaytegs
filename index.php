<?php include("services/header.php");

//mysqli_query($cxn, "INSERT INTO user(userID, userIP, userPlatform, userDevice, dateUpdated) VALUES (NULL, '$userIP', 'userPlatform', '$userDevice', '$today')") or die("indexr");



?>


<!--splash-->
<div id="splash" style="bottom:0; z-index:100; position:fixed; height:100%; width:100%; background:url(img/<?php echo $siteBanner ?>) center no-repeat #000; background-size:contain; transition:5s"></div>
<!--splash-->



<!--home-->
<!--home-->
<!--home-->
<!--home-->
<!--home-->
<!--home-->
<table id="base"><tr><td>
<div class="landscape_height_half" style="height:130px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain;" onClick="open_menu()"></div>
<table>
<tr valign="middle"><td align="center">
<a id="wall_song_art_0" href="https://www.instagram.com/uselessrg/" target="_blank"><div style="height:250px; width:250px; background:url(img/useless.png) center no-repeat; background-size:cover; border-bottom:10px #222 solid"></div></a>
<?php $counter = 1;
$music_sql = mysqli_query($cxn, "SELECT * FROM music ORDER BY musicID DESC LIMIT 3");
while($row_music_sql = mysqli_fetch_assoc($music_sql)){extract($row_music_sql);
$music_link = "music_".$musicID."_".$music_details;
$invchars = array(" ","@",":","/","&","°","!","§","$","%","&","/","(",")","=","?","`","´",".","-",";",":","_","ö","ä","#","'","+","~","<","|",">","²","³","{","[","]","}",'"','/');
$music_link = substr(str_replace($invchars, "_", $music_link), 0, 30);
?>

<a id="wall_song_art_<?php echo $counter ?>" href="#<?php echo $music_link ?>"><div style="border-radius:0 0 5px 5px; height:250px; width:250px; background:url(img/music/<?php echo $music_art ?>) center no-repeat; background-size:cover; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></div></a>
<?php $counter++;} ?>
</td></tr>
<tr><td>
<div class="landscape_hide" style="padding:10px; font-weight:900; text-align:center">
<?php $counter = 1;
$music_sql = mysqli_query($cxn, "SELECT * FROM music ORDER BY musicID DESC LIMIT 3");
while($row_music_sql = mysqli_fetch_assoc($music_sql)){extract($row_music_sql);
?>
<span id="wall_song_title_<?php echo $counter ?>"><?php echo $music_details ?></span>
<?php $counter++;} ?>
</div>
</td></tr>
<tr><td align="center">
<div class="landscape_hide">
<ul>
<li id="slider1" onClick="waller('1')"><a href="#"></a></li>
<li id="slider2" onClick="waller('1')"><a href="#"></a></li>
<li id="slider3" onClick="waller('1')"><a href="#"></a></li>
</ul>
</div>
</td></tr>
</table>
<div class="landscape_hide" style="padding:100px 20px 20px 20px; text-align:center" onClick="bop()"><?php echo $siteBio ?></div>
</td></tr><tr><td style="height:40px; background:url(img/menu.png) center no-repeat #444; background-size:contain;" onClick="open_menu()"></td></tr></table>
<!--home-->
<!--home-->
<!--home-->
<!--home-->
<!--home-->
<!--home-->





<!--menu-->
<!--menu-->
<!--menu-->
<!--menu-->
<!--menu-->
<!--menu-->
<div id="menu_window_opaque" style="bottom:0; z-index:1; position:fixed; width:100%; height:100%; background:rgba(0,0,0,.6); transition:.5s" onClick="close_menu()"></div>
<div id="menu_window" style="bottom:0; z-index:2; position:fixed; width:100%; transition:1s">
<table style="background:#444">
<tr onClick="close_menu()"><td>
<div class="landscape_hide" style="padding:15px 0 5px 0; background:#444; color:#999; text-align:center">MENU</div>
</td></tr><tr><td>
<div id="mySidenav" class="sidenav">
  <a class="landscape_height_half" href="#Song">SONGS</a>
  <a class="landscape_height_half" href="#Beat">BEATS</a>
  <a class="landscape_height_half" href="#gallery">GALLERY</a>
</div>

<table style="color:#999"><tr valign="middle"><td style="padding:10px 10px 0 10px" align="center">
&nbsp;FOLLOW<br>
<a href="<?php echo $siteInstagram?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/social_instagram.png) center no-repeat; background-size:contain; display:inline-block" onClick="close_menu()"></div></a>
<a href="<?php echo $siteTwitter?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/social_twitter.png) center no-repeat; background-size:contain; display:inline-block" onClick="close_menu()"></div></a>
</td></tr><tr><td style="padding:0 10px 0 10px" align="center">
&nbsp;STREAM<br>
<a href="<?php echo $siteAudiomack?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_audiomack.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $siteItunes?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_itunes.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $siteSoundcloud?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_soundcloud.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $siteSpotify?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_spotify.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $siteTidal?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_tidal.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $siteYoutube?>" target="_blank">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_youtube.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
</td></tr><tr valign="middle"><td style="padding:20px; background:#222" align="center">
&nbsp;CONTACT<br>
<span style="color:#fff"><?php echo $siteEmail?>
<a href="https://www.instagram.com/uselessrg/" target="_blank"><div style="color:#555">crafted by UselessRG</div></a>
</span>
</td></tr></table>
<div style="height:40px; background:url(img/menu_close.png) center no-repeat; background-size:contain; display:non" onClick="close_menu()"></div>
</td></tr>
</table>
</div>
<!--menu-->
<!--menu-->
<!--menu-->
<!--menu-->
<!--menu-->
<!--menu-->







<!--gallery-->
<!--gallery-->
<!--gallery-->
<!--gallery-->
<!--gallery-->
<!--gallery-->
<table id="gallery_window" style="z-index:4; position:fixed; bottom:0; background:#222; transition:.5s"><tr valign="bottom"><td align="center">
<div class="landscape_hide" style="height:130px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain;" onClick="open_menu()"></div>
<div style="color:#555; padding:10px">GALLERY</div>

<div id="gallery_window_grid" style="padding:20px; border:3px #1f1f1f solid; overflow:scroll">
<?php
$gallery_sql = mysqli_query($cxn, "SELECT * FROM gallery ORDER BY galleryID DESC");
while($row_gallery_sql = mysqli_fetch_assoc($gallery_sql)){extract($row_gallery_sql);
$gallery_link = "gallery_".$galleryID."_".$galleryDetails;
$invchars = array(" ","@",":","/","&","°","!","§","$","%","&","/","(",")","=","?","`","´",".","-",";",":","_","ö","ä","#","'","+","~","<","|",">","²","³","{","[","]","}",'"','/');
$gallery_link = substr(str_replace($invchars, "_", $gallery_link), 0, 30);
?>
<a href="#<?php echo $gallery_link?>">
<div style="height:150px; width:150px; margin:5px; background:url(img/<?php echo $galleryPicture?>) center no-repeat #111; background-size:contain; display:inline-block"></div></a>
<?php } ?>

</div>

</td></tr><tr><td style="height:40px; background:url(img/menu_close.png) center no-repeat #444; background-size:contain;" onClick="close_gallery()"></td></tr></table>



<!--gallery_preview-->

<table id="gallery_preview_window" style="z-index:5; position:fixed; bottom:0; background:#000; transition:.5s"><tr valign="bottom"><td align="center">

<div class="landscape_hide" style="height:130px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain;" onClick="open_menu()"></div>
<table style="height:70%; width:100%">
<tr id="preview_picture_holder" style="background:url(img/useless.png) center no-repeat; background-size:contain;"><td></td></tr>
<tr><td id="preview_picture_caption" style="padding:20px; background:#222">
Happy Valentines Happy Valentines Slide through for Conversations with Me & Myself. #afrovibes #february #2020 #valentines #odosisi in my bio
</td></tr>
</table>

</td></tr><tr><td style="height:40px; background:url(img/menu_close.png) center no-repeat #444; background-size:contain;" onClick="close_gallery_preview()"></td></tr></table>
<!--gallery_preview-->

<!--gallery-->
<!--gallery-->
<!--gallery-->
<!--gallery-->
<!--gallery-->
<!--gallery-->






<!--music-->
<!--music-->
<!--music-->
<!--music-->
<!--music-->
<!--music-->
<table id="music_window" style="z-index:4; position:fixed; bottom:0; background:#222; transition:.5s"><tr valign="bottom"><td align="center">
<div class="landscape_hide" style="height:130px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain;" onClick="open_menu()"></div>
<div id="music_category" style="color:#555; padding:10px;">SONGS</div>

<div id="music_window_grid" style="padding:20px; border:3px #1f1f1f solid; overflow:scroll">


</div>

</td></tr><tr><td style="height:40px; background:url(img/menu_close.png) center no-repeat #444; background-size:contain;" onClick="close_music()"></td></tr></table>
<!--music-->
<!--music-->
<!--music-->
<!--music-->
<!--music-->
<!--music-->






<!--music_preview-->
<!--music_preview-->
<!--music_preview-->
<!--music_preview-->
<!--music_preview-->
<!--music_preview-->
<table id="music_preview_window" style="z-index:5; position:fixed; bottom:0; background:#222; transition:.5s">
<tr valign="top"><td>

<div class="landscape_hide">
<table><tr valign="top"><td style="width:15%;"></td>
<td style="height:400px; width:70%; background:#111; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div style="height:130px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain;" onClick="open_menu()"></div>
<div  style="height:270px; background:url(img/music/<?php echo $music_art?>) center no-repeat #111; background-size:contain; margin:0 0 10px 0;" id="music_preview_art"></div>
<div style="height:100%;"></div>
</td>
<td style="width:15%"></td>
</tr><tr><td colspan="3" style="padding:20px 0;" align="center">
<div id="music_category_preview" style="color:#555"><?php echo $music_category ?></div>
<div style="padding:10px; font-size:1.5em" id="music_preview_title"><?php echo $music_details ?></div>
<div style="color:#555; padding-top:20px">Available on</div>
<a href="<?php echo $site_audiomack ?>" target="_blank" id="music_preview_audiomack" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_audiomack.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_itunes ?>" target="_blank" id="music_preview_itunes" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_itunes.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_soundcloud ?>" target="_blank" id="music_preview_soundcloud" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_soundcloud.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_spotify ?>" target="_blank" id="music_preview_spotify" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_spotify.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_tidal ?>" target="_blank" id="music_preview_tidal" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_tidal.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_youtube ?>" target="_blank" id="music_preview_youtube" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_youtube.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
</td></tr></table>
</div>










<div class="landscape_hide_inverse">
<div style="height:90px; background:url(img/<?php echo $siteBanner ?>) center no-repeat; background-size:contain;" onClick="open_menu()"></div>
<table style="background:#111"><tr valign="top"><td style="width:40%;" align="center">
<div style="height:200px; width:200px; background:url(img/music/<?php echo $music_art?>) center no-repeat #111; background-size:contain; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="music_preview_art_l"></div>
</td>
<td style="padding:20px 0;" align="center">
<div id="music_category_preview" style="color:#555"><?php echo $music_category ?></div>
<div style="padding:10px; font-size:1.5em" id="music_preview_title_l"><?php echo $music_details ?></div>
<div style="color:#555; padding-top:20px">Available on</div>
<a href="<?php echo $site_audiomack ?>" target="_blank" id="music_preview_audiomack_l" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_audiomack.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_itunes ?>" target="_blank" id="music_preview_itunes_l" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_itunes.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_soundcloud ?>" target="_blank" id="music_preview_soundcloud_l" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_soundcloud.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_spotify ?>" target="_blank" id="music_preview_spotify_l" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_spotify.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_tidal ?>" target="_blank" id="music_preview_tidal_l" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_tidal.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
<a href="<?php echo $site_youtube ?>" target="_blank" id="music_preview_youtube_l" onClick="musicExternalLinkClick('<?php echo $musicID?>')">
<div style="height:40px; width:40px; margin:5px; background:url(img/stream_youtube.png) center no-repeat; background-size:contain; display:inline-block"></div></a>
</td></tr></table>
</div>

<center>
<div id="music_preview_window_1" style="z-index:4; position:fixed; bottom:40px; width:100%; padding:10px 0">2020 &copy; jaytegs.com
<a href="https://www.instagram.com/uselessrg/" target="_blank"><div style="color:#555">crafted by UselessRG</div></a>
</div>
<div id="music_preview_window_2" style="z-index:4; position:fixed; bottom:0; width:100%; height:40px; background:url(img/menu_close.png) center no-repeat #333; background-size:contain;" onClick="close_music_preview()"></div>
</center>
</td></tr></table>
<!--music_preview-->
<!--music_preview-->
<!--music_preview-->
<!--music_preview-->
<!--music_preview-->
<!--music_preview-->








<!--<div class="landscape_hide" style="padding:100px 20px 20px 20px; text-align:center" onClick="bop()">PRODUCER &bull; SINGER &bull; SONGWITER</div>-->



<script>
function _(el){return document.getElementById(el);}
function __(el){return document.getElementsByClassName(el);}
function ___(el){return document.getElementsByTagName(el);}
window.onload = function fluid(){
	var heighter = "-" + window.innerHeight * 2 + "px";
	var heightee = window.innerHeight + "px";
	var heighte65 = window.innerHeight + "px";
	_("splash").style.bottom = heighter 									//splash
	_("base").style.height = heightee										//base
	_("gallery_window").style.height = heightee								//gallery
	_("gallery_window").style.bottom = heighter								//gallery
	_("gallery_window_grid").style.height = heighte65						//gallery
	_("gallery_preview_window").style.height = heightee						//gallery
	_("gallery_preview_window").style.bottom = heighter						//gallery
	_("preview_picture_holder").style.height = heighte65					//gallery
	_("music_window").style.height = heightee								//music
	_("music_window").style.bottom = heighter								//music_preview
	_("music_window_grid").style.height = heighte65							//music
	_("music_preview_window").style.height = heightee						//music_preview
	_("music_preview_window").style.bottom = heighter						//music_preview
	_("music_preview_window_1").style.bottom = heighter						//music_preview
	_("music_preview_window_2").style.bottom = heighter						//music_preview
	_("menu_window").style.bottom = heighter								//menu
	_("menu_window_opaque").style.display = "none";							//menu
	bop();
	fluidiy()
}
window.onresize = function fluid(){
	var heighter = "-" + window.innerHeight * 2 + "px";
	var heightee = window.innerHeight + "px";
	var heighte65 = window.innerHeight + "px";
	
	_("base").style.height = heightee										//base
	_("gallery_window").style.height = heightee								//gallery
	_("gallery_window_grid").style.height = heighte65						//gallery
	_("gallery_preview_window").style.height = heightee						//gallery
	_("preview_picture_holder").style.height = heighte65					//gallery
	_("music_window").style.height = heightee								//music
	_("music_window_grid").style.height = heighte65							//music
	_("music_preview_window").style.height = heightee						//music_preview
	
	
	
	_("splash").style.bottom = heighter; 									//splash
	_("gallery_window").style.bottom = heighter; 							//gallery
	_("gallery_preview_window").style.bottom = heighter; 					//gallery
	_("gallery_preview_window").style.bottom = heighter; 					//gallery
	_("music_window").style.bottom = heighter; 								//music_preview
	_("music_preview_window").style.bottom = heighter; 						//music_preview
	_("music_preview_window_1").style.bottom = heighter; 					//music_preview
	_("music_preview_window_2").style.bottom = heighter; 					//music_preview
	_("menu_window").style.bottom = heighter; 								//menu
	
	bop();
	fluidiy()
}

roter_turm = 0;
if((window.innerWidth > window.innerHeight) && window.innerWidth < 1000){
	xxxxxx = __("landscape_hide_inverse")
	for (i = 0; i < xxxxxx.length; i++) {
		xpx = xxxxxx[i].style.display = "block"
	}
}else{
	xxxxxx = __("landscape_hide_inverse")
	for (i = 0; i < xxxxxx.length; i++) {
		xpx = xxxxxx[i].style.display = "none"
	}
}
function fluidiy(){
	if((window.innerWidth > window.innerHeight) && window.innerWidth < 1000){
		x = __("landscape_height_half")
		for (i = 0; i < x.length; i++) {
			xpx = x[i].style.height.split('px')[0]
		
		x[i].style.height = xpx / 2 + "px"
		
		}
		
		xx = __("landscape_hide")
		for (i = 0; i < xx.length; i++) {
			xpx = xx[i].style.display = "none"
		}
		
		xxx = __("landscape_hide_inverse")
		for (i = 0; i < xxx.length; i++) {
			xpx = xxx[i].style.display = "block"
		}
		
		
		
		roter_turm = 1
	}else{
		
		
		
		if(roter_turm == 1){
			xxxx = __("landscape_height_half")
			for (i = 0; i < xxxx.length; i++) {
				xpx = xxxx[i].style.height.split('px')[0]
			
			xxxx[i].style.height = xpx * 2 + "px"
			}
			
		xxxxx = __("landscape_hide")
		for (i = 0; i < xxxxx.length; i++) {
			xpx = xxxxx[i].style.display = "block"
		}
		
		xxxxxx = __("landscape_hide_inverse")
		for (i = 0; i < xxxxxx.length; i++) {
			xpx = xxxxxx[i].style.display = "none"
		}
		
			roter_turm = 0
		}
	}
}


function close_menu(){
	_("menu_window").style.bottom = "-" + _("menu_window").offsetHeight + "px";
	_("menu_window_opaque").style.display = "none";
	}
function open_menu(){
	_("menu_window").style.bottom = 0;
	_("menu_window_opaque").style.display = "inline-block";
	}
function close_music(){
	_("music_window").style.bottom = "-" + _("gallery_window").offsetHeight + "px";
	location.hash = ""
	}
function open_music(x){
	_("music_category").innerHTML = _("music_category_preview").innerHTML = x +"s";
	_("music_window").style.bottom = 0;
	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  _("music_window_grid").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "services/musicer.php?x=" + x, true);
	  xhttp.send();
	}
function close_music_preview(){
	_("music_preview_window").style.bottom = "-" + _("music_preview_window").offsetHeight + "px";
	_("music_preview_window_1").style.bottom = "-" + _("music_preview_window").offsetHeight + "px";
	_("music_preview_window_2").style.bottom = "-" + _("music_preview_window").offsetHeight + "px";
	//dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
	location.hash = "songs"
	//dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
	}

function open_music_preview(){
	_("music_preview_window").style.bottom = 0;
	_("music_preview_window_1").style.bottom = "40px";	
	_("music_preview_window_2").style.bottom = 0;
	hash = window.location.href.split('#')[1]
	y = hash.split('_')[0]
	x = hash.split('_')[1] 

	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(y == "music"){
				_("music_preview_art").style.background = this.responseText.split('__')[1]
				_("music_preview_art").style.backgroundSize = "contain"
				_("music_preview_title").innerHTML = this.responseText.split('__')[2]
				_("music_preview_audiomack").href = this.responseText.split('__')[3]
				_("music_preview_itunes").href = this.responseText.split('__')[4]
				_("music_preview_soundcloud").href = this.responseText.split('__')[5]
				_("music_preview_spotify").href = this.responseText.split('__')[6]
				_("music_preview_tidal").href = this.responseText.split('__')[7]
				_("music_preview_youtube").href = this.responseText.split('__')[8]
				_("music_preview_art_l").style.background = this.responseText.split('__')[1]
				_("music_preview_art_l").style.backgroundSize = "200px 200px"
				_("music_preview_title_l").innerHTML = this.responseText.split('__')[2]
				_("music_preview_audiomack_l").href = this.responseText.split('__')[3]
				_("music_preview_itunes_l").href = this.responseText.split('__')[4]
				_("music_preview_soundcloud_l").href = this.responseText.split('__')[5]
				_("music_preview_spotify_l").href = this.responseText.split('__')[6]
				_("music_preview_tidal_l").href = this.responseText.split('__')[7]
				_("music_preview_youtube_l").href = this.responseText.split('__')[8]
			}else{
				_("preview_picture_holder").style.background = this.responseText.split('__')[1]
				_("preview_picture_holder").style.backgroundSize = "200px 200px"
				_("preview_picture_caption").innerHTML = this.responseText.split('__')[2]
			}
		}
	  };
	  xhttp.open("GET", "services/stats.php?x=" + x + "&y=" + y, true);
	  xhttp.send();
}
function close_gallery(){
	_("gallery_window").style.bottom = "-" + _("gallery_window").offsetHeight + "px";
	location.hash = ""
	}
function open_gallery(){
	_("gallery_window").style.bottom = 0;
	}
function close_gallery_preview(){
	_("gallery_preview_window").style.bottom = "-" + _("gallery_preview_window").offsetHeight + "px";
	location.hash = "gallery"
	//window.history.back();
	}
function open_gallery_preview(){
	_("gallery_preview_window").style.bottom = 0;
	}
	
	
function close_alles(){
	_("gallery_preview_window").style.bottom = "-" + _("gallery_preview_window").offsetHeight + "px";
	_("gallery_window").style.bottom = "-" + _("gallery_window").offsetHeight + "px";
	_("music_preview_window").style.bottom = "-" + _("music_preview_window").offsetHeight + "px";
	_("music_preview_window_1").style.bottom = "-" + _("music_preview_window_1").offsetHeight + "px";
	_("music_preview_window_2").style.bottom = "-" + _("music_preview_window_2").offsetHeight + "px";
	_("music_window").style.bottom = "-" + _("gallery_window").offsetHeight + "px";
	}

function musicExternalLinkClick(x){
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {};
			xhttp.open("GET", "services/stats.php?x=" + x + "&z=zzz", true);
			xhttp.send();
	}
}
window.onhashchange = function boper(){bop();}


function bop(){
	var hash;
	if (window.location.href.indexOf('#')>-1){
		hash = window.location.href.split('#')[1];
	}
	
	if(hash){
	if(hash.length < 1){close_alles()}
	
	if(hash == "gallery"){
		close_menu();
		open_gallery(hash);
	}else if(hash == "Song"){
		close_menu();
		open_music("Song");
	}else if(hash == "Beat"){
		close_menu();
		open_music("Beat");
	}else if(hash.includes("gallery_")){
		open_gallery_preview(hash);
	}else if(hash.includes("music_")){
		open_music_preview(hash);
	}
	
	}


}


var myVar = setInterval(waller, 5000);
counter = 1;

waller()
function waller(x){
if(x){counter = x}

if(_("wall_song_art_3")){_("wall_song_art_3").style.display = _("wall_song_title_3").style.display = "none"}
if(_("wall_song_art_2")){_("wall_song_art_2").style.display = _("wall_song_title_2").style.display = "none"}
if(_("wall_song_art_1")){_("wall_song_art_1").style.display = _("wall_song_title_1").style.display = "none"}

_("wall_song_art_0").style.display = "none";
_("slider1").className = _("slider2").className = _("slider3").className = "";
_("slider1").style.display = _("slider2").style.display = _("slider3").style.display = "none"
if(slider1){_("slider1").style.display = "inline-block"}
if(slider2){_("slider1").style.display = _("slider2").style.display = "inline-block"}
if(slider3){_("slider1").style.display = _("slider2").style.display = _("slider3").style.display = "inline-block"}

if(!_("wall_song_art_1")){
	_("wall_song_art_0").style.display = "block"
	_("slider1").className = ""
}else if(counter == 1){
	_("wall_song_art_1").style.display = "block"
	_("wall_song_title_1").style.display = "block"
	_("slider1").className = "active"
}else if(counter == 2){
	_("wall_song_art_2").style.display = "block"
	_("wall_song_title_2").style.display = "block"
	_("slider2").className = "active"
}else if(counter == 3){
	_("wall_song_art_3").style.display = "block"
	_("wall_song_title_3").style.display = "block"
	_("slider3").className = "active"
}


if (_("wall_song_art_3")  && counter==3){
	counter=0
}else if(!_("wall_song_art_3")  && _("wall_song_art_2")   && counter==2){
	counter=0
}else if(!_("wall_song_art_3")  && !_("wall_song_art_2")  && _("wall_song_art_1")   && counter==1){
	counter=0
}else if(!_("wall_song_art_3")  && !_("wall_song_art_2")  && !_("wall_song_art_1") ){
	_("wall_song_art_0").style.display = "block";
}
counter++;
}

</script>