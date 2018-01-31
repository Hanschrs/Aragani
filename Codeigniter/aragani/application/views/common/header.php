<!DOCTYPE html>
<html>
<head>
	<title>Aragani - Mahakarya</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Ajang olah raga dan seni tahunan yang diadakan oleh Student Council Universitas Ciputra">
	<meta name="keywords" content="aragani, mahakarya, universitas, ciputra, student, council, uc, events">
	<meta name="author" content="Hans Christian Yulianto, Evan Tanuwijaya">

	<!-- no-cache -->
	<meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />

	<!-- logo -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/logo/mahakarya_logo_icon.png">

	<!-- css -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?= site_url('home/index'); ?>"><img src="<?= base_url(); ?>assets/images/logo/mahakarya_logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if ($active=='1') {echo 'active'; }?>">
					<a class="nav-link" href="<?= site_url('home/index'); ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item <?php if ($active=='2') {echo 'active'; }?>">
					<a class="nav-link" href="<?= site_url('home/about'); ?>">Tentang Mahakarya</a>
				</li>
				<li class="nav-item <?php if ($active=='3') {echo 'active'; }?>">
					<a class="nav-link" href="<?= site_url('home/competition'); ?>">Lomba</a>
				</li>
				<li class="nav-item <?php if ($active=='4') {echo 'active'; }?>">
					<a class="nav-link" href="<?= site_url('home/festival'); ?>">Festival</a>
				</li>
				<li class="nav-item <?php if ($active=='5') {echo 'active'; }?>">
					<a class="nav-link" href="<?= site_url('home/contact_us'); ?>">Contact Us</a>
				</li>
			</ul>
		</div>
	</nav>