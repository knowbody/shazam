<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">

	<title>Shazam</title>

	<link rel="stylesheet" href="assets/css/vnd/pure.css">

	<!--[if lte IE 8]>
		<link rel="stylesheet" href="assets/css/main-grid-old-ie.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
		<link rel="stylesheet" href="assets/css/main-grid.css">
	<!--<![endif]-->

	<!--[if lte IE 8]>
		<link rel="stylesheet" href="assets/css/layouts/marketing-old-ie.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
		<link rel="stylesheet" href="assets/css/layouts/shazam.css">
	<!--<![endif]-->

	<link rel="stylesheet" href="assets/css/vnd/font-awesome.css" />

</head>
<body class="positive">


<div class="header">
	<div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
		<a class="pure-menu-heading" href="./">Return Home</a>
	</div>
</div>

<div class="hero-container">
	<div class="hero">
		<h1 type="text" class="hero-head">
<?php echo $_GET["city"]; ?>
		</h1>
		<p class="hero-subhead">
			<h1 class="sentiment">Listens to positive tunes!</h1>
		</p>
	</div>
</div>

<script src="assets/js/vnd/jquery-2.1.0.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>
