<?php get_header(); ?>

<section class="bg-yellow" id="hero">
	<div class="container">
		<div class="gutter">
			<img id="hero-logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="A logo with scaffolding being designed.">
		</div>
		<div class="content">
		<h1>Layers</h1>
		<div id="hero-info">
			<p class="hero-detail" id="hero-city">San Francisco, CA</p>
			<p aria-hidden="true" class="hero-detail" id="hero-dates">_ JUN 08-10</p>
			<p class="sr">June 08-12</p>
		</div>
		<h2>A new design conference for the Mac+iOS community</h2>
	</div>
</section>
<nav>
	<div class="container">
		<div class="content">
			<a class="nav-button" href="#what">What</a>
			<a class="nav-button" href="#presenters">Presenters</a>
			<a class="nav-button" href="#deets">The Deets</a>
			<a class="nav-button" href="#register">Register</a>
			<a class="nav-button" href="#about">About Us</a>
		</div>
	</div>
</nav>

<?php get_footer(); ?>
