
<?php
	$json = file_get_contents('data/projects.json');
	$projects = json_decode($json, true);
?>

<?php 
	$pageTitle = "All Projects";
	include('templates/modules/page-header/template.php');
?>

<section class='all-projects'>
	<inner-column>
		
		<ul class='project-list'>
			<?php foreach ($projects as $project) { ?>
				<li class='project'>
					<?php include('templates/components/project-card/template.php'); ?>
				</li>
			<?php } ?>
		</ul>

	</inner-column>
</section>
