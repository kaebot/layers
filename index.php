<?php get_header(); ?>

<!-- hero -->
<section class="bg-yellow" id="hero">
	<div class="container">
		<div class="gutter">
			<img id="hero-logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="A logo with scaffolding being designed.">
		</div>
		<div class="top content">
		<h1>Layers</h1>
		<div id="hero-info">
			<p class="hero-detail" id="hero-city">San Francisco, CA</p>
			<p aria-hidden="true" class="hero-detail" id="hero-dates">_ JUN 08-10</p>
			<p class="sr">June 08-12</p>
		</div>
		<h2>A new design conference for the Mac+iOS community</h2>
	</div>
</section>
<!-- nav -->
<nav>
	<div class="container">
		<div class="top content">
			<a class="nav-button" href="#what">What</a>
			<a class="nav-button" href="#presenters">Presenters</a>
			<a class="nav-button" href="#deets">The Deets</a>
			<a class="nav-button" href="#register">Register</a>
			<a class="nav-button" href="#about">About Us</a>
		</div>
	</div>
</nav>
<section class="bg-squares" id="what">
	<div class="container">
		<div class="gutter">
			<h2>01</h2>
			<h1>What</h1>
		</div>
		<div class="content">
			<p>A three-day conference to talk about design,<br>celebrate our industry,<br>and eat snacks.</p>
			<p>Like a party,<br>but for learning.</p>
		</div>
		<a href="#register">Enough Already, Sign Me Up</a>		
	</div>
</section>
<!-- presenters -->
<section class="bg-yellow bg-brown-dots" id="presenters">
	<div class="container">
		<div class="gutter">
			<h2>02</h2>
			<h1>Presenters</h1>
		</div>
		<div class="bg-yellow content">
			<h3>Seriously, look at these people</h3>
			
			<!-- left presenter -->
			<div class="presenter">
				<div class="portrait">
					<img src="<?php bloginfo('template_directory'); ?>/img/hs-maja.jpg" alt="A portrait of Maja.">
				</div>
				<div class="bio">
					<h1>Maja Henderson</h1>
					<h2>Square</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			
			<!-- right presenter -->
			<div class="presenter alt">
				<div class="portrait">
					<img src="<?php bloginfo('template_directory'); ?>/img/hs-maja.jpg" alt="A portrait of Maja.">
				</div>
				<div class="bio">
					<h1>Maja Henderson</h1>
					<h2>Square</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			
			<!-- left presenter -->
			<div class="presenter">
				<div class="portrait">
					<img src="<?php bloginfo('template_directory'); ?>/img/hs-maja.jpg" alt="A portrait of Maja.">
				</div>
				<div class="bio">
					<h1>Maja Henderson</h1>
					<h2>Square</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- details -->
<section class="bg-purple" id="deets">
	<div class="container">
		<div class="bg-dark-purple gutter">
			<h2>03</h2>
			<h1>The Deets</h1>
			<p>Just 2 blocks from WWDC, we're just steps away from cool hotels, awesome restaurants, and top-notch nightlife.</p>
		</div>
		<div class="content">
			<h1>Bespoke</h1>
			<p>Westfield San Francisco Centre<br>845 Market Street, San Francisco<br>Level 4 / Under the Dome</p>
		</div>
	</div>
	<div id="map">
		<img class="sr" src="" alt="A map showing the location of Bespoke on Market Street between fourth and fifth streets.">
	</div>
</section>
<!-- register -->
<section class="bg-dark-purple bg-purple-dots" id="register">
	<div class="container">
		<div class="gutter">
			<h2>04</h2>
			<h1>Registration</h1>
		</div>
		<div class="bg-yellow content">
			<tito-widget event="opening-night-llc/layersclub"></tito-widget>
		</div>
	</div>
</section>
<!-- about -->
<section class="bg-dark-purple" id="about">
	<div class="container">
		<div class="gutter">
			<h2>05</h2>
			<h1>About</h1>
		</div>
		<div class="content">
			<h3>Brought to you by<br>Jessie, Elaine & Adobe</h3>
			<div class="presenter">	
				<div class="portrait">
					<img src="<?php bloginfo('template_directory'); ?>/img/hs-maja.jpg" alt="A portrait of Maja.">
				</div>
				<div class="bio">
					<h1>Jessie Char</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="presenter">
				<div class="portrait">
					<img src="<?php bloginfo('template_directory'); ?>/img/hs-maja.jpg" alt="A portrait of Maja.">
				</div>
				<div class="bio">
					<h1>Elaine Pow</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
