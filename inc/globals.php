<?php

	require_once($_SERVER['DOCUMENT_ROOT']."/inc/isvalidrequest.php");

function redirectAndExit($target)
{
	header("Location: $target");
	exit;
}

?>