<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Counter downloads</title>
	<script src="js/jquery-1.11.3.js"></script>
</head>
<body>

	<div class="mx-download">
		<a class="MxDownload" data-nameplugin="MxBox" href="downloads/MxBox.zip" download>Скачать</a>
	</div>
	
	<!-- count downloads -->
	<?php
		$version_script = time();
	?>
	<script>
		var panhJSON = "downloads/dataDownloads/dataDownloads.json?v=<?php echo $version_script; ?>",
			pathPHP = "downloads/dataDownloads/dataDownloads.php?v=<?php echo $version_script; ?>";	
	</script>
	<script src="downloads/dataDownloads/dataDownloads.js?v=<?php echo $version_script; ?>"></script>
	<!-- count downloads -->

</body>
</html>