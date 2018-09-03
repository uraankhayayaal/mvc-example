				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Spectral</h2>
							<p>Another fine responsive<br />
							site template freebie<br />
							crafted by <a href="http://html5up.net">HTML5 UP</a>.</p>
							<ul class="actions special">
								<li><a href="#" class="button primary">Activate</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

					<?php foreach ($users as $key => $user) { ?>
						<h1><?= $user->username ?></h1>
					<?php } ?>
					<hr>
					<h1><?= $one_user->username; ?></h1>

				<?= $this->render('_one') ?>
				
				<?= $this->render('_two') ?>

				<?= $this->render('_three') ?>
				
				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Arcue ut vel commodo</h2>
								<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
							</header>
							<ul class="actions stacked">
								<li><a href="#" class="button fit primary">Activate</a></li>
								<li><a href="#" class="button fit">Learn More</a></li>
							</ul>
						</div>
					</section>