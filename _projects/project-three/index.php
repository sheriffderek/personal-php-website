<?php include('../../functions.php'); ?>

<?php echo queryString(); ?>

<nav>
	<ul>
		<li><a href="?view=list">All Pokemon</a></li>
	</ul>
</nav>

<?php

	/* ROUTER */
	$view = "list";
	if ( isset($_GET['view']) ) {
		$view = $_GET['view'];
	}


	/* API INFO */
	$endpoint = "https://pokeapi.co/api/v2";


	/* LIST TEMPLATE */
	if ($view == "list") {
		// must be a list page
		$json = file_get_contents("$endpoint/pokemon?limit=1000");
		$data = json_decode($json, true);
		$monsters = $data["results"];


		echo "<ul>";
		foreach ($monsters as $monster) {
			$url = $monster["url"];
			$urlParts = explode('/', $url);
			$id = $urlParts[6];
			$link = "?view=detail&id=$id";
			echo "
				<li>
					<a href='$link'>
						$monster[name]
					</a>
				</li>
			";
		}
		echo "</ul>";
	}


	/* DETAIL TEMPLATE */
	if ($view == "detail") {
		$id = $_GET['id'];
		$json = file_get_contents("$endpoint/pokemon/$id");
		$monster = json_decode($json, true);
		// formatCode($monster);
		echo "<h1>$monster[name]</h1>";

	} 
