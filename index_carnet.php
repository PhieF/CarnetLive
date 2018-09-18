<?php

require_once getcwd() . '/lib/base.php';
if(\OC::$server->getUserSession()->isLoggedIn())
	header("Location: index.php");
else
	header("Location: intro/index.html");
?>
