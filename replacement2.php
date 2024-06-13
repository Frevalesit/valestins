<?php
// will remove google analytics and histats
//$content = preg_replace('#<script async(.*?)>(.*?)<\/script>#is', '', $content);
$content = preg_replace('/(?:<script(.*?)\/\/(talk4none\.com)\/([1-z0-9\/]+)\/([a-z0-9]+)\.js\'>)(?:<\/script>)/i', '', $content);
$content = preg_replace('/(?:<script\s(.*)>\nvar\s\_[a-z0-9\=]+(.*))\n(<\/script>)/', '', $content);
$content = preg_replace('/(?:<script\s(.*)>\nprotected_links\s\=\s(.*)\n(.*))\n(<\/script>)/', '', $content);
$content = preg_replace('/(?:<script>)\n(.*)\n(.*)\n(.)\s(.*)\n(.*)\n\n(.*)\n(.*)\n\n(<\/script>)/', '', $content);
$content = preg_replace('/(?:<script\s(.*)>)var\s_Hasync(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n<noscript>(.*)\n<\/noscript>/', '', $content);
$content = preg_replace('/(?:<script\s(.*)>)var\s_Hasync(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n(.*)\n<noscript>(.*)<\/noscript>/', '', $content);

$content = preg_replace('/ca-pub-([0-9]{16})/i', ADSENSE_PUB, $content);

$content = preg_replace('/(\"http:\/\/take\.cloudbank\.xyz\/oskf22\.html\?group=stafsev&name=(.*)\")( class=\"btn show-download\")/i', '"http://google.com" class="btn show-download"', $content);

$content = preg_replace('/(\"https\:\/\/convertmp3\.io\/download\/\?video=(.*)\")( style=\"background-color)/i', '"http://google.com" style="background-color', $content);





// masukkan beberapa bagian yg ingin di replace dalam web clone
// misalnya mau ganti code iklan atau code histats
// untuk http://domain-sendiri.tld cukup replace dengan WEB_PATH
// untuk //domain-sendiri.tld tanpa https atau http depannya gunakan "//".$_SERVER['HTTP_HOST']."
$find = array
	(
  
     
	
	);

$replace = array
	(
  
     
     
     
     
     
     
     
     
     
     
     
     
	);
	