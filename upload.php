<?php 
include("includes/includedFiles.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/upload.css">
	<title></title>
</head>
<body>
	<div id = "background">
		<div id = "inputContainer">
			<form id = "uploadForm" action="upload.php" method="POST">
				<h2>Upload a Song!</h2>
				<label for="songName">Song Name</label>
				<input type="text" name="songName" placeholder="Enter the song name">

				<label for="artist">Artist</label>
				<input type="text" name="artist" placeholder="Enter the Artist Name">

				<label for="trackNo">Track Number</label>
				<input type="text" name="trackNo" placeholder="Enter the Track Number">

				<label for="duration">Duration</label>
				<input type="text" name="duration" placeholder="Enter the Duration">

				<label for="album">Album</label>
				<input type="text" name="album" placeholder="Enter the Album Name">

				<label for="fileName">File Name</label>
				<input type="text" name="fileName" placeholder="Browse the file">

				
				<input type="file" id="file-selector" multiple>
				<script>
  					const fileSelector = document.getElementById('file-selector');
  					fileSelector.addEventListener('change', (event) => {
    					const fileList = event.target.files;
    					console.log(fileList);
  					});
				</script>

				<button type="file" name ="selectFile">Select File</button>
				<script>
  					const fileSelector = document.getElementById('selectFile');
  					fileSelector.addEventListener('change', (event) => {
    					const fileList = event.target.files;
    					console.log(fileList);
  					});
				</script>
				<button type="submit" name="uploadButton">Upload</button>

				

			</form>
		</div>
		<div id="uploadText">
			<h1>Unlimited Uploads!</h1>
				<h2>Rules to upload a song</h2>
				<ul>
					<li>Song Name is the actual name of the song</li>
					<li>Artist name is the name of the rightful artist</li>
					<li>Track Number is the track number of the song in the album</li>
					<li>Duration is song duration.</li>
					<li>Album name is the name of the album to which the song belongs</li>
					<li>File Name should be the song name with no spaces</li>
					
				</ul>
		</div>
	</div>


</body>
</html>