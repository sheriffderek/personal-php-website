
<?php 
	include('templates/modules/page-header/template.php');
?>

<?php if ( isset($pageData["sections"] ) ) { ?> 
	
	<?php foreach ($pageData["sections"] as $section) {
		$module = $section["module"];
		
		?>

		<section>
			<inner-column>

				<?php styleGuideDetailLink($module, $pageData["slug"]) ?>

				<?php include("templates/modules/$module/template.php"); ?>

			</inner-column>
		</section>

	<?php } ?>

<?php } ?>
