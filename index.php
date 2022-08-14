
<?php include('header.php'); ?>

<?php echo "?" . queryString(); ?>

<hr>

<?php

	/* ROUTER */
	$page = "home";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	$pageFilePath = 'templates/pages/' . $page . '.php';
	if ( file_exists($pageFilePath) ) {
		include('templates/pages/' . $page . '.php');
	} else {
		echo "Error: page <code>$page</code> does not exist";
	}


?>


<?php include('footer.php'); ?>