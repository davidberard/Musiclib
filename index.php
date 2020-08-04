<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
					<a href="#">Genre</a>
					<a href="#">Year</a>
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

										<article class="col-md-2">
											<a href="#"><img src="assets/images/cover-noimg.jpg" alt="Album Title"></a>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>