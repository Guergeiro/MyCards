<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Titulo -->
	<title><?php echo ucfirst(preg_replace("/(?<!\A)[A-Z]+/", ' $0', $page)); ?> - MyCards</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">

	<!-- Core CSS -->
	<link href="<?php echo base_url("assets/css/core.css"); ?>" rel="stylesheet">

	<!-- Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/{$page}.css"); ?>">

	<?php if ($this->uri->segment(1,0) === "listarCampanha"): ?>
	<link href="<?php echo base_url("assets/css/addons/datatables.min.css"); ?>" rel="stylesheet">
	<?php endif; ?>
</head>

<body style="padding-top: 72px;" class="grey lighten-5">