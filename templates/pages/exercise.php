
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

			<a href='exercises/<?=$slug?>'>
				<h1 class='loud-voice'><?=$title?></h1>
			</a>

			<p><?=$intro?></p>

		</inner-column>
	</header>


	<section>
		<inner-column>

			<?php include("_exercises/$slug.php"); ?>

		</inner-column>
	</section>


	<section class='show-php'>
		<inner-column>

			<h2><code>$_POST</code></h2>
			<?php formatCode($_POST); ?>

			<p class='calm-voice notes'>(this syntax is a default representation from PHP - but we don't use the same syntax and spaces in the real code)</p>
			
			<?php show_source("_exercises/$slug.php"); ?>

		</inner-column>
	</section>

</article>