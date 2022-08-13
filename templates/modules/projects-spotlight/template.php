
<?php
	$heading = $heading ?? "Projects spotlight heading";
	$intro = $intro ?? "Here is a short introduction to explain which selection of projects this is and why we're showing them.";

	$projects = [
		[
			"title" => "Project title Apple",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "projects/project-one",
		],
		[
			"title" => "Project title Bannana",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "projects/project-two",
		],
		[
			"title" => "Project title Carrrot",
			"teaser" => "Example teaser",
			"linkText" => "Visit me",
			"url" => "projects/project-three",
		],
	];
?>


<projects-spotlight>

	<h2 class='attention-voice'><?=$heading?></h2>

	<p><?=$intro?></p>

	<ul class='project-list'>
		<?php foreach ($projects as $project) { ?>
		<li class='project'>
			<?php include('templates/components/project-card/template.php'); ?>
		</li>
		<?php } ?>
	</ul>

</projects-spotlight>
