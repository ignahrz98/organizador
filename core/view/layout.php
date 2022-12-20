<!doctype html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Organizador</title>
	<!-- Bootstrap CSS -->
	<link href="res/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="res/css/custom.css">
	<!--Javascript-->
	<script src="res/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<?php require_once(_ADD_VIEW_ . "_SIDEBAR/" . _VIEW_FILE); ?>
			</div>

			<div class="col-sm-10">
				<?php require_once(_ADD_VIEW_ . $nombre_de_la_vista_a_llamar. "/" . _VIEW_FILE); ?>
			</div>
		</div>
	</div>
</body>
</html>