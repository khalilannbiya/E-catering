<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/style.css">
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header id="sticky">
		<nav>
			<ul>
				<li class="home"><a href="<?= base_url('user'); ?>">HOME</a></li>
				<li><a href="<?= base_url('user/menu'); ?>">LIST MENU</a></li>
				<li><a href="<?= base_url('user/pemesanan'); ?>">PEMESANAN</a></li>
				<div id="logo">
					<a href="<?= base_url('user'); ?>"><img src="<?= base_url('assets/image/logo.png'); ?>"></a>
				</div>
				<li><a href="<?= base_url('user/about'); ?>">ABOUT US</a></li>
				<li class="logout"><a href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
				<li class="foto-profile">
					<a class="profile" href="<?= base_url('user/profile'); ?>">
						<span><?= $user['name']; ?></span>
						<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Foto Profile">
					</a>
				</li>
			</ul>
		</nav>

		</div>
	</header>