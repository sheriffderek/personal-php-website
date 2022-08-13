
<?php
	$json = file_get_contents('data/goals.json');
	$goalsData = json_decode($json, true);
?>


<goals-module>
	<?php foreach ($goalsData as $timeBlock) { ?>
		<section>
			<h2 class='attention-voice'><?=$timeBlock["heading"]?></h2>

			<ol>
				<?php foreach ($timeBlock["goals"] as $goal) { ?>
					<li>
						<p><?=$goal?></p>
					</li>
				<?php } ?>
			</ol>
		</section>
	<?php } ?>
</goals-module>