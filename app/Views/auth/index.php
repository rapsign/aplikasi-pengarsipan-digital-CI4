<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page bg-secondary">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline">
			<div class="card-header text-center">

				<img src=" <?= base_url(); ?>/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8" width="50%">
				<h5 class="mt-3 font-weight-bold text-secondary">APLIKASI PENGARSIPAN DIGITAL TEKNIK KOMPUTER POLITEKNIK NEGERI SRIWIJAYA</h5>
			</div>
			<div class="card-body">
				<?php if (session()->getFlashdata('pesan')) : ?>
					<div class="alert alert-success text-center" role="alert">
						<?= session()->getFlashdata('pesan'); ?>
					</div>
				<?php endif; ?>
				<?php if (session()->getFlashdata('gagal')) : ?>
					<div class="alert alert-danger text-center" role="alert">
						<?= session()->getFlashdata('gagal'); ?>
					</div>
				<?php endif; ?>

				<form action="<?= base_url('/auth/login'); ?>" method="post">
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Email" name="email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<button style="background-color:#6c2bab;" type="submit" class="btn text-white btn-block">Login</button>
				</form>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="../../plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>