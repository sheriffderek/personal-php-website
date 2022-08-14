
<?php
	$heading = $heading ?? "Projects spotlight heading";
	$intro = $intro ?? "Here is a short introduction to explain which selection of projects this is and why we're showing them.";

	$json = file_get_contents('data/projects.json');
	$projects = json_decode($json, true);
?>


<projects-spotlight>

	<h2 class='attention-voice'><?=$heading?></h2>

	<p><?=$intro?></p>

	<ul class='project-list'>
		<?php foreach ($projects as $project) { ?>
			<?php if ( isset($project['featured'] )) { ?>
				<li class='project'>
					<?php include('templates/components/project-card/template.php'); ?>
				</li>
			<?php } ?>
		<?php } ?>
	</ul>

</projects-spotlight>
