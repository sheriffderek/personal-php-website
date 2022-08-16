
<?php
	$json = file_get_contents('data/exercises.json');
	$exercises = json_decode($json, true);
?>

<?php 
	$pageTitle = "All Projects";
	include('templates/modules/page-header/template.php');
?>

<section class='all-exercises'>
	<inner-column>
		
		<ul class='exercise-list'>
			<?php foreach ($exercises as $exercise) { 
				$title = $exercise["title"];
				$slug = $exercise["slug"];
				?>
				<li class='exercise'>
					<h2><?=$title?></h2>

					<a href='?page=exercise&slug=<?=$slug?>'>
						Visit <span class='screen-reader-only'><?=$title?></span>
					</a>
				</li>
			<?php } ?>
		</ul>

	</inner-column>
</section>
