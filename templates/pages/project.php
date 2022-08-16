
<?php 
	$projectsJson = file_get_contents('data/projects.json'); 
	$projectsJson = json_decode($projectsJson, true);

	foreach ($projectsJson as $project) {
		if ($project["slug"] == $_GET["slug"]) {
			$thisProject = $project;
		}
	}

	$title = $thisProject["title"];
	$teaser = $thisProject["teaser"];
	$sections = $thisProject["case-study"];
	$url = $thisProject["url"];
?>

<article>

	<header class="page-header">
		<inner-column>

			<h1 class='loud-voice'><?=$title?></h1>

			<p><?=$teaser?></p>

		</inner-column>
	</header>


	<?php foreach ($sections as $section) {
		$module = $section["module"];
		?>

		<section>
			<inner-column>

				<?php include("templates/modules/$module/template.php"); ?>

			</inner-column>
		</section>

	<?php } ?>


	<footer>
		<a href='<?=$url?>' target='_blank'>Live site</a>
	</footer>

</article>
