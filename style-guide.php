<?php include('header.php'); ?>


<?php 
	$pageTitle = "Living style guide";
	include('templates/modules/page-header/template.php');
?>


<section>
	<inner-column>
		<?php include('templates/modules/generic-text/template.php'); ?>
	</inner-column>
</section>

<section>
	<inner-column>
		<?php 
		$content = "<h2>Another generic text heading</h2> <p>This time with two paragraphs to show you what we're capable of.</p><p>Here's some <a href='#'>Links</a> and some <strong>strong emphasis</strong> too.</p>";
		include('templates/modules/generic-text/template.php'); ?>
	</inner-column>
</section>


<section class='latest-projects'>
	<inner-column>

		<?php 
			include('templates/modules/projects-spotlight/template.php');
		?>

	</inner-column>
</section>


<section class='new-news'>
	<inner-column>

		<?php 
			$heading = "New news";
			include('templates/modules/graphic-diptych/template.php');
		?>

	</inner-column>
</section>


<section class='other-news'>
	<inner-column>
		
		<?php 
			$heading = "In other news";
			$flipped = true;
			include('templates/modules/graphic-diptych/template.php');
		?>

	</inner-column>
</section>


<?php include('footer.php'); ?>