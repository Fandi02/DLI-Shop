<!-- Main Content -->
<div id="content" class="site-content">
	<!-- Slideshow -->
	<div class="section slideshow">
		<div class="tiva-slideshow-wrapper">
			<div id="tiva-slideshow" class="nivoSlider">
				<a href="#">
					<img class="img-responsive" src="assets/img/slideshow/slide1.png" alt="Slideshow Image">
				</a>
				<a href="#">
					<img class="img-responsive" src="assets/img/slideshow/slide2.png" alt="Slideshow Image">
				</a>
			</div>
		</div>
	</div>

	<!-- Product - Best Sellers -->
	<div id="category" class="section products-block product-tab nav-color show-hover nav-round best-sellers">
		<div class="block-title" data-aos="zoom-in-down" data-aos-duration="2000">
			<h2 class="title">Category <span>Product</span></h2>
			<div class="sub-title">Here you can find a variety of interesting choices that we provide</div>
		</div>

		<div class="block-content">
			<!-- Tab Navigation -->
			<div class="tab-nav" data-aos="zoom-in-up" data-aos-duration="2000">
				<ul>
					<li class="active">
						<a data-toggle="tab" href="#all-products">
							<span>All</span>
							<span>Products</span>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#platform_open_learning">
							<span>Platform Open</span>
							<span>Learning</span>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#media_pembelajaran">
							<span>Media</span>
							<span>Pembelajaran</span>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#buku_digital">
							<span>Buku</span>
							<span>Digital</span>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#aplikasi_pembelajaran">
							<span>Aplikasi</span>
							<span>Pembelajaran</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- Produk -->
			<div class="container-fluid">
				<div class="row text-center">
					<?php foreach ($barang as $brg) : ?>
						<div class="card" style="width: 18rem; border: 3px;">
							<img src="<?= base_url() . 'assets/img/product/' . $brg->gambar ?>" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title"><?= $brg->nama_barang ?></h5>
								<small><?= $brg->keterangan ?></small><br>
								<span class="badge bg-success mb-3">Rp. <?= $brg->harga ?></span>
								<br><a href="#" class="btn btn-sm btn-primary">Add to Cart</a>
								<br><a href="#" class="btn btn-sm btn-succes">Detail</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- Partners -->
			<div id="partners" class="section partners" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="700">
				<div class="block-content">
					<div class="container">
						<div class="partners-wrap owl-theme owl-carousel">
							<a href="#"><img src="assets/img/Logo/dli-eduventure1.png" alt="Partner 1"></a>
							<a href="#"><img src="assets/img/Logo/logo-kemdikbud-official1.png" alt="Partner 2"></a>
							<a href="#"><img src="assets/img/Logo/logo-puipt1.png" alt="Partner 3"></a>
							<a href="#"><img src="assets/img/Logo/LogoUM2.png" alt="Partner 4"></a>
							<a href="#"><img src="assets/img/Logo/dli-logo1.png" alt="Partner 5"></a>
						</div>
					</div>
				</div>
			</div>


			<!-- Testimonial -->
			<div id="testimonial" class="section testimonial">
				<div class="container">
					<div class="row">
						<div class="testimonial-wrap owl-theme owl-carousel">
							<div class="item">
								<div class="image"><img src="img/testimonial-1.png" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>

							<div class="item">
								<div class="image"><img src="img/testimonial-2.png" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>

							<div class="item">
								<div class="image"><img src="img/testimonial-3.png" alt=""></div>
								<div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit .”</div>
								<div class="name">WILLIAM JAMES</div>
								<div class="job">Hairstyle</div>
							</div>
						</div>
					</div>
				</div>
			</div>