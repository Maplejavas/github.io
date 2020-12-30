<head>
	<title>mofu mofu</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="fonts.css">
	<link rel="icon" href="https://lh5.googleusercontent.com/wo1RKPVbozZMDlW3P6av-dJ2cYf_SayOm97JfcuSHdwLCzC9-5YUp5fMrFH6qEmUT93SPV-bdylLzll_KLOdb1lXmxr_CJWK">
	<?php
		//Fetches random image from /images folder.
		function randomKimura($dir) {
			$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
			$randKimu = $images[array_rand($images)];
			return $randKimu;
		}

		//Saves image ready to display
		$stash = randomKimura('images/');
		$image = '<img src="'.$stash.'"></a>';
		//echo $image;
	?>
</head>

<body>
	<div class='container'>
		<!-- Link to same page to "refresh". Image displayed from earlier func-->
		<a href="index.php" id="image">
			<?php echo $image ?>
		</a>
	</div>
	<br>
	<div class='text'>
		<!-- Link to Ko-Fi -->
		<a href="https://ko-fi.com/maplejava" target='_blank'>gib kofis to waste on commissions</a>
	</div>
	<!-- Creator and owner :D -->
	<footer class='foot'>
		Website by GJS 2020. Owned by MapleJava
	</footer>
</body>