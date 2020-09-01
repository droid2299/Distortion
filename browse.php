<?php 
include("includes/includedFiles.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Distortion!</title>
	<link rel="logos" href="http://localhost/Distortion/browse.php?">
</head>
<body>
<h1 class="pageHeadingBig">You Might Also Like</h1>

<div class="gridViewContainer">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 100");

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

<h1 class="pageHeadingBig">Pop</h1>
<div class="gridViewContainer">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE genre = 2");

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

<h1 class="pageHeadingBig">Rock</h1>
<div class="gridViewContainer">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE genre = 1");

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

<h1 class="pageHeadingBig">Hip Hop</h1>
<div class="gridViewContainer">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE genre = 3");

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

<h1 class="pageHeadingBig">Rap</h1>
<div class="gridViewContainer">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE genre = 4");

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

<h1 class="pageHeadingBig">R & B</h1>
<div class="gridViewContainer">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE genre = 10");

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

<h1 class="pageHeadingBig">Classical</h1>
<div class="gridViewContainer">

	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE genre = 6");

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


</body>
</html>
