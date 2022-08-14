
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
		include('templates/pages/home.php');
	}

	if ($page == "about") {
		include('templates/pages/about.php');
	}

	if ($page == "contact") {
		include('templates/pages/contact.php');
	}

	if ($page == "style-guide") {
		include('templates/pages/style-guide.php');
	}

	if ($page == "resume") {
		include('templates/pages/resume.php');
	}

	if ($page == "goals") {
		include('templates/pages/goals.php');
	}

?>


<?php include('footer.php'); ?>