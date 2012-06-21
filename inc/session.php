<?php

	require_once($_SERVER['DOCUMENT_ROOT']."/inc/isvalidrequest.php");

class SESSION
{
	
	public static function init()
	{
		// nothing here yet
	}
	
	public static function setPage($page)
	{
		self::$_page = $page;
	}
	
	public static function getPage()
	{
		return self::$_page;
	}
	
	private static $_page;
	
}

SESSION::init();

?>