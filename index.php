<?php
	/* ROUTER */
	$page = "home";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	// GET THE PAGE DATA
	$pageDataFilePath = "data/pages/$page.json";
	$pageData = null;
	if ( file_exists($pageDataFilePath) ) {
		$thePageJson = file_get_contents($pageDataFilePath);
		$pageData = json_decode($thePageJson, true);
	}
?>


<?php include('header.php'); ?>


<?php
	if ($pageData) { 

		if ( !isset( $pageData["template"] ) ) {
			include('templates/pages/default.php');
		} else {
			include("templates/pages/$pageData[template].php");
		}

	} else {
		http_response_code(404);
		include('templates/pages/404.php');
	}
?>


<?php include('footer.php'); ?>