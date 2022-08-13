
<?php include('header.php'); ?>

<?php echo "?" . queryString(); ?>

<hr>

<?php

	/* ROUTER */
	$page = "home";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	if ($page == "home") {
		echo "home";
	}

	if ($page == "about") {
		echo "about";
	}

	if ($page == "contact") {
		echo "contact";
	}

?>


<?php include('footer.php'); ?>