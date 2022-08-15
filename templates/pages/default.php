
<?php 
	include('templates/modules/page-header/template.php');
?>


<?php foreach ($pageData["sections"] as $section) {
	$module = $section["module"];
	?>

	<section>
		<inner-column>

			<?php include("templates/modules/$module/template.php"); ?>

		</inner-column>
	</section>

<?php } ?>
