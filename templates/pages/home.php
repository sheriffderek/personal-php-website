
<?php 
	$pageTitle = "Home page";
	include('templates/modules/page-header/template.php');
?>

<section class='new-news'>
	<inner-column>
		
		<?php 
			$heading = "Latest projects";
			include('templates/modules/projects-spotlight/template.php');
		?>

	</inner-column>
</section>

<section class='other-news'>
	<inner-column>

		<?php 
			$heading = "In other news";
			include('templates/modules/graphic-diptych/template.php');
		?>

	</inner-column>
</section>
