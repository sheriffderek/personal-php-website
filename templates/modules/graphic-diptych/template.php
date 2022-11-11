
<?php
	$heading = $heading ?? "Default heading here";
	$flipped = (isset($flipped)) ? "flipped" : "";
?>


<graphic-diptych class='<?=$flipped?>'>
	
	<picture>
		<img src='/images/landscape.jpg' alt='$todo'>
	</picture>

	<div class='content'>
		<h2 class='attention-voice'><?=$heading?></h2>
		
		<p>content Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Itaque, eos quis velit, nam deserunt repudiandae quod sequi cupiditate fuga aspernatur voluptatem, blanditiis sint expedita optio, id neque eaque magnam corrupti!</p>
	</div>

</graphic-diptych>
