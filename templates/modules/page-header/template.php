<?php
	$pageTitle = $pageTitle ?? "This is the page-header title";
	$pageIntro = $pageIntro ?? "Many pages will utilize this <code>page-header</code> module. It includes the main page title. and a supporting pargaraph to get the visitor aquinted with the page's goals";
?>


<header class='page-header'>
	<inner-column>

		<h1 class='loud-voice'><?=$pageTitle?></h1>

		<p><?=$pageIntro?></p>

	</inner-column>
</header>