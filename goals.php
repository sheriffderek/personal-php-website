<?php include('header.php'); ?>


<?php 
	$pageTitle = "My Goals";
	$pageIntro = "Here is what I'm working toward";
	include('templates/modules/page-header/template.php');
?>


<section class=''>
	<inner-column>
		
		<?php include('templates/modules/goals-list/template.php'); ?>

	</inner-column>
</section>


<?php include('footer.php'); ?>