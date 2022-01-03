<?php

mysqli_query($cxn, "Create database $dbname");

mysqli_select_db($cxn, $dbname);

mysqli_query ($cxn, "CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userIP` varchar(40) DEFAULT NULL,
  `userCountry` varchar(50) NOT NULL,
  `userPlatform` varchar(100) NOT NULL,
  `userDevice` varchar(200) DEFAULT NULL,
  `dateUpdated` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;") or die('error batching parser with code [0808 65:9800.0098]1_user');

mysqli_query ($cxn, "CREATE TABLE IF NOT EXISTS `site` (
  `siteID` int(11) NOT NULL AUTO_INCREMENT,
  `siteTitle` varchar(20) NOT NULL,
  `siteBanner` varchar(30) NOT NULL,
  `siteDescription` varchar(100) NOT NULL,
  `siteBio` varchar(100) NOT NULL,
  `siteEmail` varchar(100) NOT NULL,
  `siteInstagram` varchar(100) NOT NULL,
  `siteTwitter` varchar(100) NOT NULL,
  `siteAudiomack` varchar(100) NOT NULL,
  `siteItunes` varchar(100) NOT NULL,
  `siteSoundcloud` varchar(100) NOT NULL,
  `siteSpotify` varchar(100) NOT NULL,
  `siteTidal` varchar(100) NOT NULL,
  `siteYoutube` varchar(100) NOT NULL,
  `siteUsername` varchar(100) NOT NULL,
  `sitePassword` varchar(100) NOT NULL,
  `dateUpdated` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`siteID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;") or die('error batching parser with code [0808 65:9800.0098]1_music');

mysqli_query ($cxn, "CREATE TABLE IF NOT EXISTS `music` (
  `musicID` int(11) NOT NULL AUTO_INCREMENT,
  `music_category` varchar(4) DEFAULT NULL,
  `music_details` varchar(100) NOT NULL,
  `music_art` varchar(30) DEFAULT NULL,
  `site_audiomack` varchar(50) DEFAULT NULL,
  `site_itunes` varchar(50) DEFAULT NULL,
  `site_soundcloud` varchar(50) DEFAULT NULL,
  `site_spotify` varchar(50) DEFAULT NULL,
  `site_tidal` varchar(50) DEFAULT NULL,
  `site_youtube` varchar(50) DEFAULT NULL,
  `musicPreview` int(50) DEFAULT NULL,
  `musicExternalLinkClick` varchar(10000) DEFAULT NULL,
  `dateUpdated` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`musicID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;") or die('error batching parser with code [0808 65:9800.0098]1_gallery');

mysqli_query ($cxn, "CREATE TABLE IF NOT EXISTS `gallery` (
  `galleryID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryDetails` varchar(100) NOT NULL,
  `galleryPicture` varchar(30) DEFAULT NULL,
  `galleryPreview` int(11) NOT NULL,
  `dateUpdated` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`galleryID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;") or die('error batching parser with code [0808 65:9800.0098]1_site');