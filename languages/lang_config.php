<?php 
	session_start();

	//Check whether the language is set in session or not
	if(!isset($_SESSION['lang']))
	{
		//If Language is not set in session then set default language as English
		$_SESSION['lang'] = 'en';
	}
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
		if($_GET['lang'] == 'en'){
			$_SESSION['lang'] = 'en';
		}
		else if ($_GET['lang'] == 'hn') {
			$_SESSION['lang'] = 'hn';		
		}
		else if ($_GET['lang'] == 'kn') {
			$_SESSION['lang'] = 'kn';
		}
	}

	require_once $_SESSION['lang']. '.php';
?>