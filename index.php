<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>MusicLib</title>
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>
<body>
<div class="container-fluid">
		<div class="row">
			<header class="col-12 col-md-2">
				<h1>MusicLib</h1>
				<nav>
					<a href="#">Search</a>
					<hr>
					<a href="#">Albums</a>
					<a href="#">Artists</a>
					<a href="#">Year</a>
					<span href="#">Genre</span>
					<ul>
						<li><a href="#">Punk</a></li>
						<li><a href="#">Ska</a></li>
						<li><a href="#">Metal</a></li>
						<li><a href="#">Blues</a></li>
					</ul>
					<hr>
					<a href="#">Login</a>
				</nav>
			</header>

			<main class="col-12 col-md-10">
				<section>
					<div class="page-header">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<h2>Page header</h2>
									<p>Lorem ipsum</p>
								</div>
							</div>
						</div>
						
					</div>
					<div>
						<div class="container-fluid">
							<div class="row">
								<?php
									for($i=0; $i<42;$i++) {
										?>

										<article class="col-md-2 card-album">
											<a href="#" class="thumbnail"><img src="assets/images/cover-noimg.jpg" alt="Album Title"></a>
											<h3>Album Title</h3>
											<span>
												<span>Artist : <a href="#artist">Artist Name</a></span>
												<span>Year : <a href="#year">XXXX</a></span>
												<span>Genre : Post-Genre, CanBeMulti</span>
											</span>
										</article>
										
										<?php
									}
								?>
								
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>
	

<footer>footer</footer>
</div>

<!-- Vue.js -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

</body>
</html>