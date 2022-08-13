
<?php include('header.php'); ?>


<?php 
	$pageTitle = "HOME page title";
	$pageIntro = "Welcome home, buddy.";
	include('templates/modules/page-header/template.php');
?>


<section class='our-new-award'>
	<inner-column>
		
		<?php 
			$heading = "Our new award";
			include('templates/modules/graphic-diptych/template.php');
		?>

	</inner-column>
</section>


<section class='latest-projects'>
	<inner-column>
		
		<?php 
			$heading = "My latest besties";
			include('templates/modules/projects-spotlight/template.php');
		?>

	</inner-column>
</section>


<?php include('footer.php'); ?>