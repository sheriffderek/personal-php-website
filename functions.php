<?php 


function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting();


function formatCode($things) {
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($things);
		echo '</pre>';
	echo '</code>';
}

function queryString() {
	return $_SERVER['QUERY_STRING'];
}


function styleGuideDetailLink($type, $page) {
	if ($page == "style-guide") {
		$link = "?page=module&slug=$type";
		echo "<a href='$link' target='$type'>LINK</a>";
	}
}
