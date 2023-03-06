<?php 
// Website Name
$webName = "AniZiti";
// Website URL
$webUrl = "//{$_SERVER['SERVER_NAME']}";  //for example $webUrl = "//{$_SERVER['SERVER_NAME']}:8888";
// Logo
$webLogo = "/files/images/ziti.png";

// Socials 
// 1 . Donate 
$donate = "#";
// 2 . Telegram
$telegram = "#";
// 3 . Discord 
$discord = "#";
// 4 Redit
$redit = "#";
// Twitter
$twitter = "#";

$banner = $webUrl . "/files/images/banner.png";


// API URL
if (date("d") < "20") {
    $apiLink = "https://anikatsu-api1.herokuapp.com";
  } else {
    $apiLink ="https://anikatsu-api2.herokuapp.com";
  };

?>
