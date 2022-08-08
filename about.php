<?php include('header.php'); ?>


<?php 
	$pageTitle = "About page title";
	include('page-header.php');
?>


<section class='new-news'>
	<inner-column>
		
		<?php 
			$heading = "New news";
			include('graphic-diptych.php');
		?>

	</inner-column>
</section>


<section class='other-news'>
	<inner-column>
		
		<?php 
			$heading = "In other news";
			include('graphic-diptych.php');
		?>

	</inner-column>
</section>


<?php include('footer.php'); ?>