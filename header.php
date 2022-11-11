<?php include('functions.php'); ?>

<!doctype html>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Ultimate portfolio framework</title>
		<!-- description -->
		<!-- image -->

		<link rel='stylesheet' href='/styles/site.css'>
	</head>

	<body class='<?=pageClass($page)?> <?=pageTemplateClass($pageData)?>'>
		<header class='site-header'>
			<inner-column>

				<?php include('templates/partials/mast-head.php'); ?>

			</inner-column>
		</header>

		<main class='page-content'>