<?php 
include("includes/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Distortion!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/title.css">

</head>
<body style="padding-top: 0px" >
	<div class="halfImage" id="halfImage" style="text-align: center; padding-top: 0px">
		<div class="Text" id = "freeText" style="padding-top: 0px">
			<!--<h1 style="color: white; font-size:100px ; padding-top: 100px; padding-bottom: 0px">Listen to music...free</h1> -->
			<!--<h1 style="color:white;font-size:40px; padding-top: 0px">Anywhere Anytime!</h1> -->
		</div>
	</div>

	<div class="webPlayer" id="webPlayer">
		<h1 style="font-size:80px" >Looking for music?</h1>
		<h2>Start listening to the best new releases.</h2>

		<div class="submitButton">
			<button type="submit" name = "webPlayer" onclick="window.location = 'browse.php'" >Launch Web Player</button>
		</div>

		<div class="gridViewContainer">

		<?php
			$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 6");

			while($row = mysqli_fetch_array($albumQuery)) {
				



				echo "<div class='gridViewItem'>
						<span role='link' tabindex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")'>
							<img src='" . $row['artworkPath'] . "'>

							<div class='gridViewInfo'>"
								. $row['title'] .
							"</div>
						</span>

					</div>";



			}
		?>

		</div>		
	</div>

	<div class="owners" id="owners">
		<ul>
			<h3 style="font-size: 30px">Created by</h3>
			<li>Darryl Fernandes (Roll No. 17)</li>
			<li>Vishal Dube (Roll No. 15)</li>
			<li>Vailantina Fernandes (Roll No. 18)</li>

			<h3 style="font-size: 30px">Contact Us</h3>
			<pre>Xavier Institute Of Engineering
Opposite S.L.Raheja Hospital, 
Mahim Causeway, Mahim (West), 
Mumbai, Maharashtra 400016
India</pre>
			

		</ul>

		
	</div>
	

</body>
</html>