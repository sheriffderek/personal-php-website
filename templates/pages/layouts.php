
<?php
	$json = file_get_contents('data/layouts.json');
	$layouts = json_decode($json, true);
?>

<?php 
	$pageTitle = "All Projects";
	include('templates/modules/page-header/template.php');
?>

<?php foreach ($layouts as $layout) { ?>
	<section class='all-layouts'>
		<inner-column>
			
			<?php include("_layouts/$layout[slug].php"); ?>

		</inner-column>
	</section>
<?php } ?>