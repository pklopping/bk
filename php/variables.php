<?php
	// $SITE_ROOT = "/bk";
	$SITE_ROOT = "/~au70pi1337/bk";

	function parseURL() {
		$page = "asdf";

		switch($_GET['page']) {
			case "portfolio": 
				$page = "port";
				break;
			default: 
				$page = "home";
				break;
		}

		return "pages/".$page.".php";
	}
?>