
<?php
	$exercisesJson = file_get_contents('data/exercises.json'); 
	$exercisesJson = json_decode($exercisesJson, true);

	foreach ($exercisesJson as $exercise) {
		if ($exercise["slug"] == $_GET["slug"]) {
			$thisProject = $exercise;
		}
	}

	$title = $thisProject["title"];
	$intro = $thisProject["intro"];
	$slug = $thisProject["slug"];
?>

<article>

	<header class="page-header">
		<inner-column>

			<h1 class='loud-voice'><?=$title?></h1>

			<p><?=$intro?></p>

		</inner-column>
	</header>


	<section>
		<inner-column>

			<?php include("exercises/$slug.php"); ?>

		</inner-column>
	</section>

</article>