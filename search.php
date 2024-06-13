<?php
include dirname(__FILE__)."/config.php";
include dirname(__FILE__)."/function_slug.php";

if (!empty($_GET['search'])) {
		
	@header("Location: " . WEB_PATH . "/" . slugUri($_GET['search'])."-".$_GET['source']);
	exit();
}