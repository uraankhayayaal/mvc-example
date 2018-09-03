<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $this->title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="themes/classic/css/main.css" />
		<noscript><link rel="stylesheet" href="themes/classic/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<?= $this->render('_header') ?>
				
				<?= $content ?>
				
				<?= $this->render('_footer') ?>

			</div>

		<!-- Scripts -->
			<script src="themes/classic/js/jquery.min.js"></script>
			<script src="themes/classic/js/jquery.scrollex.min.js"></script>
			<script src="themes/classic/js/jquery.scrolly.min.js"></script>
			<script src="themes/classic/js/browser.min.js"></script>
			<script src="themes/classic/js/breakpoints.min.js"></script>
			<script src="themes/classic/js/util.js"></script>
			<script src="themes/classic/js/main.js"></script>

	</body>
</html>