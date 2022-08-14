
<?php
	$json = file_get_contents('data/resume.json');
	$resumeData = json_decode($json, true);

	$title = $resumeData["pageTitle"];
	$intro = $resumeData["introduction"];
	$sections = $resumeData["sections"];
?>

<header>
	<inner-column>
		<h1 class='loud-voice'><?=$title?></h1>
		<p><?=$intro?></p>
	</inner-column>
</header>


<main>

	<?php foreach($sections as $section) { ?>
		<section>
			<inner-column>
				<h2 class='attention-voice'><?=$section["heading"]?></h2>

				<ol>
					<?php foreach($section["experiences"] as $thing) { ?>
						<li>
							<time><?=$thing["year"]?></time>
							<h3><?=$thing["company"]?></h3>
							<h4><span>Role:</span> <?=$thing["role"]?></h4>
							<p><?=$thing["description"]?></p>
							<ul>
								<?php foreach($thing["tools"] as $tool) { ?>
									<li><?=$tool?></li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>
				</ol>
			</inner-column>
		</section>	
	<?php } ?>

</main>
