<?php
	$title = $pageData["title"] ?? "This is the page-header title";
	$intro = $pageData["intro"] ?? "Many pages will utilize this <code>page-header</code> module. It includes the main page title. and a supporting pargaraph to get the visitor aquinted with the page's goals";
?>


<header class='page-header'>
	<inner-column>

		<h1 class='loud-voice'><?=$title?></h1>

		<p><?=$intro?></p>

	</inner-column>
</header>