<?php

	require_once($_SERVER['DOCUMENT_ROOT']."/inc/isvalidrequest.php");

	require_once("inc/globals.php");
	require_once("inc/session.php");

	$page = "start";
	if(isset($_GET['page']) && $_GET['page'] === 'termine')
		$page = 'termine';
	elseif(isset($_GET['page']) && $_GET['page'] === 'bujinkan')
		$page = 'bujinkan';
	elseif(isset($_GET['page']) && $_GET['page'] === 'links')
		$page = 'links';
	elseif(isset($_GET['page']) && $_GET['page'] === 'kontakt')
		$page = 'kontakt';	
	elseif(isset($_GET['page']) && $_GET['page'] === 'impressum')
		$page = 'impressum';	
	SESSION::setPage($page);

	if(file_exists("action/$page.php"))
		require_once("action/$page.php");
	
?>