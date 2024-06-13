<?php
// Enter the original domain here
define("SOURCE", "dolvl.xyz");

// Enter the CDN domain here, leave empty if not available
define("CDN_DOMAIN1", "secureimages.allrecipes.com");
define("CDN_DOMAIN2", "images.media-allrecipes.com");

/******************* DON'T TOUCH *******************/
//define("TARGET", $_SERVER['HTTP_HOST']);
//define("WEB_PATH", "http://".$_SERVER['HTTP_HOST']);
$protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
define("WEB_PATH", $protocol . "://" . $_SERVER['HTTP_HOST']);
define("SOURCE_URI", $protocol . "://" . SOURCE);
define("CDN_URI1", $protocol . "://" . CDN_DOMAIN1);
define("CDN_URI2", $protocol . "://" . CDN_DOMAIN2);

/******************* DON'T TOUCH *******************/

// Masukkan publisher ID adsense disini
define("ADSENSE_PUB", "ca-pub-1234567890123456");

// Masukkan potongan kata2 yg ada dalam URL yg tidak ingin diclone
// pisahkan dengan tanda | 
// contoh test dan getmp3
// biasanya karena gak jalan, maka harus di buatin file sendiri
// contoh pada file getmp3.php

// optional jika di butuhkan
// jg lupa tambahkan baris code di bawah ini di htaccess nya 
// RewriteRule ^getmp3$ /getmp3.php [L]

$filterUri = "/\/Css|css|\/js|ajax|\.js|\.jpg|\.png|\.gif|\.jpeg|\.Css|\.css|\.zip|\.mp3|\.xml|\.atom|\.ogg|\.wma|\.webm|\.m4a|\.mp4|\.3gp|\.flv|\.mpg|\.mpeg|\.mkv|\.mov|\.m4v|\.svg|\.woff2|\.woff|\.eot|\.ttf|\.json|\.xsl/i";

$referer = "";

$old_sc_api = "";
$soundRedux_title = "SoundRedux";

$new_sc_api = "";
$mytitle = "Free Download Mp3";