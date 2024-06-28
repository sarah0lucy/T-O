<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign in / Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .icons {
            list-style: none;
            padding: 0;
        }

        .icons li {
            display: inline-block;
            margin-right: 10px;
        }

        .icons a {
            text-decoration: none;
            color: inherit;
        }
    </style>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		.fa {
		font-size: 50px;
		cursor: pointer;
		user-select: none;
		}

		.fa:hover {
		color: darkblue;
		}
		</style>
		

	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header" >
				<h2 class="title">Hai alaturi de noi!</h2>
				<nav>
					<ul>
						<li><a href="<?php echo base_url('/home') ?>">Home</a></li>
						<li><a href="<?php echo base_url('/pagina1') ?>">Haine</a></li>
						<li><a href="<?php echo base_url('/pagina2') ?>">Incaltaminte</a></li>
						<li><a href="<?php echo base_url('/pagina3') ?>">Accesorii</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
								
							<h2>Sign in</h2>
							
							<div class="split style1">
								<section>
										<?php
												$number1=rand(1,9);
												$number2=rand(1,9);
												$sum=$number1+$number2;
											?>
									<form method='post' action="<?php echo base_url('/errorsignin') ?>">
										<div class="fields">
											<div class="field half">
												<label for="username">Username</label>
												<input type="text" name="username" id="username" required/>
											</div>
											<div class="field half">
												<label for="password">Parola</label>
												<input type="password" name="password" id="password" required/>
											</div>
											<div class="field">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" required/>
											</div>
											<div class="field">
												<!-- Captcha -->
												<input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>
												<?php echo $number1.' + '. $number2 .' = '; ?>


												<input type="text" name="captcha" required/><br/>
												<span>Ai deja cont? Mergi spre pagina de <a href="<?php echo base_url('/login') ?>" style="color:red;">Logare</a></span><br/><br/>

												<input type="submit" name="submit" value="Trimite"/>
												

												
											</div>	
										</div>
									</form>
								</section>
								

								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="pagina4.php">user@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>

										
											<h3>Share</h3>
											<ul class="icons">
												<li><a href="https://twitter.com/share?url=http://index.php" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://index.php" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=http://index.php&title=My%20Page%20Title&summary=This%20is%20a%20summary" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>

									<h4>Da-ne un feedback:</h4>
									<i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
									

							<script>
							function myFunction(x) {
							x.classList.toggle("fa-thumbs-down");
							}
							</script>
								</section>
							</div>
						</div>

						
					</section>



					
		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

						
					</body>
					</html>