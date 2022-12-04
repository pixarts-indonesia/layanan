<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Pintu Keluar</title>
		<!-- Favicons -->
		<link href="<?= base_url('assets/img/favicon.png'); ?>" rel="icon">
		<link href="<?= base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

		<!-- Template Main CSS File -->
		<link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
    </head>
    <!-- body -->
	<body>
		<!-- ======= Header ======= -->
		<header id="header" class="header d-flex align-items-center">
			<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
				<img src="<?= base_url('assets/img/logo.png'); ?>" width="100%">
				<h1><?= @$lang->title; ?></h1>
			</a>

			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="<?= base_url('/') ?>" class="<?= (($uri === '') ? 'active' : '') ?>"><?= @$lang->home; ?></a></li>
					<li><a href="<?= base_url('/product') ?>" class="<?= (($uri === 'product') ? 'active' : '') ?>"><?= @$lang->product; ?></a></li>
					<li><a href="<?= base_url('/about') ?>" class="<?= (($uri === 'about') ? 'active' : '') ?>"><?= @$lang->about; ?></a></li>
					<li><a href="<?= base_url('/contact') ?>" class="<?= (($uri === 'contact') ? 'active' : '') ?>"><?= @$lang->contact; ?></a></li>
					<li class="dropdown"><a href="#"><span><?= @$lang->language; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<?php foreach ($master_language as $key => $value) : ?>
								<li>
									<a href="<?= base_url('/lang/'.$value->code_language); ?>"><?= strtoupper($value->code_language); ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				</ul>
			</nav><!-- .navbar -->

			</div>
		</header><!-- End Header -->
		<?= $this->renderSection('slider') ?>
		<?= $this->renderSection('content') ?>
		<!-- ======= Footer ======= -->
		<footer id="footer" class="footer">

			<div class="footer-content position-relative">
				<div class="container" data-aos="fade-up">
				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="footer-info">
							<h3><?= @$lang->title; ?></h3>
							<h4><?= @$lang->contact_us_sub; ?></h4>
							<p>
								<div>
									<strong><?= @$lang->phone; ?></strong>
									<a class="text-white" href="tel:6283862080888">+62 838-6208-0888</a>
									<br>
								</div>
								<div>
									<strong><?= @$lang->email; ?>:</strong> 
									<a class="text-white" target="_blank" href="mailto:informasi@pintukeluar.id">
										<span class="icon icon-envelope"></span><span class="text">informasi@pintukeluar.id</span>
									</a>
									<br>
								</div>
								<div>
									<strong><?= @$lang->career; ?>:</strong> 
									<a class="text-white" target="_blank" href="mailto:hrd@pintukeluar.id">
										<span class="icon icon-envelope"></span><span class="text">hrd@pintukeluar.id</span>
									</a>
									<br>
								</div>
							</p>
						</div>
						<div class="mb-3">
							<a href="#" target="_blank" rel="noopener noreferrer">
								<img src="<?= base_url('assets/img/android.png'); ?>" width="150">
							</a>
							<a href="#" target="_blank" rel="noopener noreferrer">
								<img src="<?= base_url('assets/img/app.png'); ?>" width="150">
							</a>
						</div>
					</div><!-- End footer info column-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4><?= @$lang->links; ?></h4>
						<ul>
							<li><a href="<?= base_url('/') ?>"><?= @$lang->home; ?></a></li>
							<li><a href="<?= base_url('/product') ?>"><?= @$lang->product; ?></a></li>
							<li><a href="<?= base_url('/about') ?>"><?= @$lang->about; ?></a></li>
							<li><a href="<?= base_url('/contact') ?>"><?= @$lang->contact; ?></a></li>
						</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4><?= @$lang->product; ?></h4>
						<ul>
							<li><a href="<?= base_url('/product') ?>"><?= @$lang->motorcycle; ?></a></li>
							<li><a href="<?= base_url('/product') ?>"><?= @$lang->car; ?></a></li>
							<li><a href="<?= base_url('/product') ?>"><?= @$lang->bicycle; ?></a></li>
							<li><a href="<?= base_url('/product') ?>"><?= @$lang->truck; ?></a></li>
						</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-3 col-md-3 footer-links">
						<h4><?= @$lang->social_media; ?></h4>
						<ul class="social-links">
							<li style="padding: 0px;" class="row">
								<div class="col-sm d-flex mt-2">
									<a target="_blank" href="https://www.youtube.com/channel/UCxseEbS26x3dKxNDnhQGPTg">
										<div class="d-flex align-items-center justify-content-center mt-2">
											<i class="bi bi-youtube"></i>
										</div>
									</a>
									<strong class="align-self-center">Youtube</strong>
								</div>
								<div class="col-sm d-flex mt-2">
									<a target="_blank" href="https://twitter.com/PintuKeluarId">
										<div class="d-flex align-items-center justify-content-center mt-2">
											<i class="bi bi-twitter"></i>
										</div>
									</a>
									<strong class="align-self-center">Twitter</strong>
								</div>
								<div class="col-sm d-flex mt-2">
									<a target="_blank" href="https://www.tiktok.com/@pintukeluar.id">
										<div class="d-flex align-items-center justify-content-center mt-2">
											<i class="bi bi-tiktok"></i>
										</div>
									</a>
									<strong class="align-self-center">Tiktok</strong>
								</div>
								<div class="col-sm d-flex mt-2">
									<a target="_blank" href="https://www.facebook.com/profile.php?id=100087929764176">
										<div class="d-flex align-items-center justify-content-center mt-2">
											<i class="bi bi-facebook"></i>
										</div>
									</a>
									<strong class="align-self-center">Facebook</strong>
								</div>
								<div class="col-sm d-flex mt-2">
									<a target="_blank" href="https://www.linkedin.com/in/pintukeluarid-a75058257">
										<div class="d-flex align-items-center justify-content-center mt-2">
											<i class="bi bi-linkedin"></i>
										</div>
									</a>
									<strong class="align-self-center">Linkedin</strong>
								</div>
								<div class="col-sm d-flex mt-2">
									<a target="_blank" href="https://www.instagram.com/pintukeluar.id/">
										<div class="d-flex align-items-center justify-content-center mt-2">
											<i class="bi bi-instagram"></i>
										</div>
									</a>
									<strong class="align-self-center">Instagram</strong>
								</div>
							</li>
						</ul>
					</div><!-- End footer links column-->
				</div>
				</div>
			</div>

			<div class="footer-legal text-center position-relative">
				<div class="container">
					<div class="copyright">
						<?= @$lang->all_rights_reserved; ?> &copy;<script>document.write(new Date().getFullYear());</script>
					</div>
				</div>
			</div>

		</footer>
		<a href="#" class="scroll-top d-flex align-items-center justify-content-center active">
			<i class="bi bi-arrow-up-short"></i>
		</a>
		<!-- End Footer -->

		<!-- Vendor JS Files -->
		<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
		<script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

		<!-- Template Main JS File -->
		<script src="<?= base_url('assets/js/main.js') ?>"></script>
	</body>
</html>