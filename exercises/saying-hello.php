
<?php
	/* initializing the data */
	$name = "";

	/* handling user input */
	$formSubmitted = isset($_POST["submitted"]);

	if ($formSubmitted) {

		if ( isset($_POST["firstName"]) ) {
			$name = $_POST["firstName"];
		}
		
	}

	/* calculations */
	function greeting($name) {
		if ( strlen($name) ) {
			echo "<p>Hello, $name, nice to meet you!</p>";
		}
	}
?>

<form method='POST'>

	<field>
		<label for='fn'>What is your first name?</label>
		<input id='fn' type='text' name='firstName' value='<?=$name?>' placeholder='...'>
	</field>	

	<button type='submit' name='submitted'>Submit</button>

</form>

<output>
	<!-- feedback -->
	<p><?php greeting($name); ?></p>
</output>
