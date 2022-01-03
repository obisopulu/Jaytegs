<?php

include("xsis.php");

$today = $dateUpdated = date("Y-m-d");

function get_ip_address() {
    $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                // trim for safety measures
                $ip = trim($ip);
                // attempt to validate IP
                if (validate_ip($ip)) {
                    return $ip;
                }
            }
        }
    }
    return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
}
function validate_ip($ip)
{
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return false;
    }
    return true;
}

$userIP = get_ip_address();


$useragent=$_SERVER['HTTP_USER_AGENT'];


if(strpos($useragent, "Windows") !== false ){ $userDevice = "Windows";}
elseif(strpos($useragent, "Android") !== false ){ $userDevice = "Android";}
elseif(strpos($useragent, "iPhone") !== false ){ $userDevice = "iPhone";}
elseif(strpos($useragent, "Mac OS") !== false ){ $userDevice = "Mac Book";}
else{ $userDevice = "Other";}

if(strpos($useragent, "Windows") !== false ){ $userPlatform = "Desktop";}
elseif(strpos($useragent, "Android") !== false ){ $userPlatform = "Mobile";}
elseif(strpos($useragent, "Apple") !== false ){ $userPlatform = "Mobile";}
elseif(strpos($useragent, "Linux") !== false ){ $userPlatform = "Desktop";}
elseif(strpos($useragent, "Mac OS") !== false ){ $userPlatform = "Desktop";}
else{ $userDevice = "Mobile";}


/*$location = json_decode(file_get_contents("http://ipinfo.io/{$userIP}/json"));
$userCountry = $location->country;*/





session_start();




$siter = mysqli_query($cxn, "SELECT * FROM site");
while($row_siter = mysqli_fetch_assoc($siter)){extract($row_siter);}

extract($_GET);
extract($_POST);
extract($_SESSION);


$seo_title = "$siteTitle";
$seo_description = "$siteDescription";
$seo_keywords = "Useless RG,Music, Naija,  Artist, music, love, life, toys, android, ios, pop, rap, songs, beats, $siteBio";
$seo_img = "img/$siteBanner";
$seo_url = "https://www.jategs.com";
$seo_author = "Useless RG";
$seo_date = "$today";
?>




<!DOCTYPE html>
<html xml:lang="en" lang="en">
<head>
<title><?php echo $seo_title?></title>
<meta charset="utf-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="text/html" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="base" href="<?php echo $seo_url?>" />
<link rel="canonical" href="<?php echo $seo_url?>" />
<link rel="icon" type="image/png" href="img/favicon.png" />
<link rel="shortcut icon" href="../img/favicon.png" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" type="text/css" href="styles/cascade.css" />
<meta rel="sitemap" type="application/xml" content="https:sitemap.xml" />
<meta name="robots" content="index/follow" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="apple-touch-icon" type="image/png" href="img/siteBanner"/>
<meta name="description" content="<?php echo $seo_description?>">
<meta name="keywords" content="<?php echo $seo_keywords?>">
<link href="img/favicon.png" rel="Shortcut icon" type="image/x-icon"/>
<link rel="icon" type="image/png" sizes="32x32" href="img/<?php echo $seo_img ?>">
<link rel="icon" type="image/png" sizes="16x16" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="57x57" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="60x60" href="img/<?php echo $seo_img ?>">
<link rel="icon" type="image/png" sizes="64x64" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="72x72" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="76x76" href="img/<?php echo $seo_img ?>">
<link rel="icon" type="image/png" sizes="96x96" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="114x114" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="120x120" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="144x144" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="152x152" href="img/<?php echo $seo_img ?>">
<link rel="icon" type="image/png" sizes="160x160" href="img/<?php echo $seo_img ?>">
<link rel="apple-touch-icon" sizes="180x180" href="img/<?php echo $seo_img ?>">
<link rel="icon" type="image/png" sizes="196x196" href="img/<?php echo $seo_img ?>">
<meta name="msapplication-TileColor" content="#F5185E">
<meta name="msapplication-TileImage" content="img/<?php echo $seo_img ?>">
<meta name="msapplication-config" content="services/browserconfig.xml">
<meta property="fb:app_id" content="80401312489">
<meta property="fb:pages" content="5550296508,18793419640">
<meta property="fb:admins" content="1032329466862501" />
<meta name="google-site-verification" content="eUcOJEC8VM2UR8krEawzbSPbwXjMffXlfFq1Gqvmi_w" />
<meta property="og:title" content="<?php echo $seo_title ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="breeders">
<meta property="og:description" content="<?php echo $seo_description ?>">
<meta property="og:url" content="<?php echo $seo_url ?>">
<meta itemprop="name" content="<?php echo $seo_title ?>">
<meta itemprop="description" content="<?php echo $seo_description ?>">
<meta itemprop="image" content="<?php echo $seo_img ?>">
<meta property="twitter:title" content="<?php echo $seo_title ?>" />
<meta name="twitter:site" value="@petpup" />
<meta property="twitter:url" content="<?php echo $seo_url ?>" />
<meta property="twitter:description" content="<?php echo $seo_description ?>" />
<meta name="twitter:creator" value="@petpup" />
<meta property="twitter:image" content="<?php echo $seo_img ?>" />
<meta property="twitter:image:alt" content="img/banner.png" />
<meta name="twitter:card" value="summary" />
<meta property="article:author" content="<?php echo $seo_author ?>" />
<meta property="og:title" content="<?php echo $seo_title ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $seo_url ?>" />
<meta property="og:image" content="<?php echo $seo_img ?>" />
<meta property="og:description" content="<?php echo $seo_description ?>" />
<meta property="og:site_name" content="breeders" />
<meta property="og:locale" content="en_UK" />
<meta property="article:published_time" content="<?php echo $today ?>" />
<meta property="article:modified_time" content="<?php echo $seo_date ?>" />
<meta property="article:section" content="<?php echo $seo_description ?>" />
<meta property="article:tag" content="<?php echo $seo_keywords ?>" />
<meta name="author" content="<?php echo $seo_author ?>" />
<meta name="copyright" content="breeders &copy; <?php echo date("Y"); ?>" />
<meta name="application-name" content="breeders" />
<meta name="tone" content="feature" id="article-tone" />
<meta name="byl" content="By Petpup" />
<meta name="PT" content="article" />
<meta name="CG" content="arts" />
<meta name="SCG" content="television" />
<meta name="PST" content="Review" />
<meta name="tom" content="Review" />
<meta name="edt" content="Nigeria" />
<script src="scripts/header.js"></script>
<script type="application/ld+json">

{
 "@context": "http://schema.org",
 "@type": "WebSite",
 "url": "https://www.jaytegs.com/",
 "potentialAction": {
"@type": "SearchAction",
"target": "https://www.jaytegs.com/search.php?q={search_term_string}",
"query-input": "required name=search_term_string"
 }
}

</script>
</head>
<body>