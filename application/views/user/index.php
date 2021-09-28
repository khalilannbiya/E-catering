<main>
	<div class="content">
		<article class="bgarticle">
			<div class="banner">
				<img src="<?= base_url('assets/image/banner.png'); ?>">
				<div class="poster">

					<h2><i class="fas fa-smile-beam"></i> Hallo <i class="fas fa-smile-beam"></i></h2>
					<h2> <?= $user['nick']; ?></h2>
					<hr>
					<p>Mereka yang berpikir tidak punya waktu untuk memakan makanan sehat, maka cepat atau lambat mereka akan merasakan dampak dari memakan makanan yang tidak sehat itu</p>
				</div>
			</div>
		</article>

		<article>
			<div class="icon">
				<ul>
					<li>
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
						</span>
						<p>SUPER QUALITY</p>
					</li>
					<li>
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-heart fa-stack-1x fa-inverse"></i>
						</span>
						<p>BEST SELLER</p>
					</li>
					<li>
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-check fa-stack-1x fa-inverse"></i>
						</span>
						<p>ALWAYS FRESH</p>
					</li>
				</ul>
			</div>
		</article>
		<article>
			<div class="slidershow middle">

				<div class="slides">
					<input type="radio" name="r" id="r1" checked>
					<input type="radio" name="r" id="r2">
					<input type="radio" name="r" id="r3">
					<div class="slide s1">
						<a href="<?= base_url('user/menu'); ?>">
							<h2 class="tombol">>>Lihat List Menu<<</h2> </a> <img src="<?= base_url('assets/image/banner-2.png'); ?>" alt="">
					</div>
					<div class="slide">
						<div class="list">
							<h2 class="mayo">TUMIS DAGING CINCANG & BUNCIS</h2>
							<hr>
							<p>Daging cincang, buncis, wortel, kentang, bawang bombay, tomat cherry, bawang putih </p>
						</div>
						<img src="<?= base_url('assets/image/mayo.jpeg'); ?>" alt="">

					</div>
					<div class="slide">
						<div class="list">
							<h2>BAKSO TEMPE PEDAS MANIS</h2>
							<hr>
							<p>Bakso, tempe, sereh, daun jeruk, bawang merah, bawang putih, kunyit, cabe rawit, cabe merah keriting, saus sambal, kecap bango, garam, merica, kaldu jamur.</p>
						</div>
						<img src="<?= base_url('assets/image/baso tempe.jpeg') ?>" alt="">
					</div>

				</div>

				<div class="navigation">
					<label for="r1" class="bar"></label>
					<label for="r2" class="bar"></label>
					<label for="r3" class="bar"></label>
				</div>
			</div>
		</article>

	</div>
</main>