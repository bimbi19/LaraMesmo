<!-- Navbar -->
<div class="navbar-fixed">
	<nav class="grey darken-2">
			<div class="container">
			  <div class="nav-wrapper">
				<a href="#!" class="brand-logo">Mesmo</a>
				<!-- activate side-bav in mobile view -->
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#about" class="animasi">About Us</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Portofolio</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="{{ route('auth.login') }}" class="btn blue lighten-2">Login</a></li>
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#about">About Us</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Portofolio</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="{{ route('auth.login') }}" class="btn blue lighten-2">Login</a></li>
				</ul>
			</div>
			</div>
		</nav>
</div>