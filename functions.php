<?php 


function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting();


function formatCode($code) {
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($code);
		echo '</pre>';
	echo '</code>';
}

function queryString() {
	return $_SERVER['QUERY_STRING'];
}


function styleGuideDetailLink($type, $page) {
	if ($page == "style-guide") {
		$link = "style-guide/modules/$type";
		echo "<a href='$link' target='$type'>LINK</a>";
	}
}

function pageClass($page) {
	return "$page-page";
}

function pageTemplateClass($pageData) {
	if ( isset($pageData["template"]) ) {
		return "$pageData[template]-template";
	} else {
		return "default-template";
	}
}

function magic_code_tm($code) {
  $patterns = ["/<(?!\/?mark\b[^>]*>)/", "/[\$]/"];
  $replacements = ['&lt;', "&#36;"];

  return preg_replace($patterns, $replacements, $code);
}
