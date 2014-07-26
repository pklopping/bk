<?php
	// $SITE_ROOT = "/bk";
	$SITE_ROOT = "/~au70pi1337/bk";

	function parseURL() {
		$page = "asdf";

		switch($_GET['page']) {
			case "portfolio": 
				$page = "port";
				break;
			case "pp":
				$page = "previous_paintings";
				break;
			case "pe":
				$page = "performance";
				break;
			case "vi":
				$page = "video";
				break;
			case "bi":
				$page = "bio";
				break;
			case "cv":
				$page = "curriculum_vitae";
				break;
			case "pr":
				$page = "press";
				break;
			case "co":
				$page = "contact";
				break;
			case "main":
			default: 
				$page = "home";
				break;
		}

		return "pages/".$page.".php";
	}
?>