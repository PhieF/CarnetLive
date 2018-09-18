<?php

require_once getcwd() . '/lib/base.php';
if(\OC::$server->getUserSession()->isLoggedIn() || !empty($_COOKIE['nc_username']))
	header("Location: index.php");
else
	header("Location: intro/index.html");
?>
