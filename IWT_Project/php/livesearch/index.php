<?php

require_once('DB.php');

$db = new DB();
$data = $db->viewData();

$search = $_GET['q'];

?>

<html>
<head>
	<link rel="stylesheet" href="search_styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,800;1,100;1,200&display=swap" rel="stylesheet">
</head>

<body>
	
	<button  id = "closeButton">
		<p class ="text">To Previous page<p>
	</button>
	
		
	<h1>Search a Property</h1>
	<form action="search.php" method="POST">
		<input type="text" name="name" placeholder="Search Here..."  onkeypress="return event.keyCode != 13" id="searchBox" value =<?php echo $search ?>  oninput=search(this.value) >
	</form>
	
	
	<ul id="dataViewer">
		<?php foreach($data as $i) { ?>
		<li>
			<div class="dataButton">
			<?php echo $i["pName"];
			?>
				<a href="#" class = "button">Book Now</a>
			</li>
			</div>
		<?php } ?>
	</ul>
	
	<script src="main.js"></script>
</body>
</html>