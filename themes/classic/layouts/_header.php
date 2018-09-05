				<!-- Header -->
					<header id="header" class="<?= ($module->controller == 'front' && $module->action == 'index') ? 'alt' : '' ?>">
						<h1><a href="/">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="/">Home</a></li>
											<li><a href="/?r=app&a=generic">Generic</a></li>
											<li><a href="/?r=app&a=elements">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>