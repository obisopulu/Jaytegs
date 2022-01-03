<?php

include("../services/header.php");

$music_sql = mysqli_query($cxn, "SELECT * FROM music WHERE music_category = '$x' ORDER BY musicID DESC");
while($row_music_sql = mysqli_fetch_assoc($music_sql)){extract($row_music_sql);
$music_link = "music_".$musicID."_".$music_details;
$invchars = array(" ","@",":","/","&","°","!","§","$","%","&","/","(",")","=","?","`","´",".","-",";",":","_","ö","ä","#","'","+","~","<","|",">","²","³","{","[","]","}",'"','/');
$music_link = substr(str_replace($invchars, "_", $music_link), 0, 30);
?>
<a href="#<?php echo $music_link?>">
<div style="height:360px; width:310px; margin:5px; background:#111; display:inline-block">
<div style="background:url(img/music/<?php echo $music_art?>) center no-repeat; background-size:contain; height:300px; width:300px; margin:5px;"></div>
<div style="padding:10px; text-align:left; overflow:scroll"><?php echo $music_details?></div>
</div>
</a>
<?php } ?>