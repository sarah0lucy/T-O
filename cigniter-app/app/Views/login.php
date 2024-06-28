<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

        <section class="wrapper style1 fade-up">
						<div class="inner">
								
							<h2>Login</h2>
							
							<div>
								<section>
									<form method='post' action="<?php echo base_url('/login') ?>">
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
                                                <!-- Remember me -->
												<input type="checkbox" id="demo-human" name="remember">
												<label for="demo-human">Remember me</label><br/><br/>
												
												<input type="submit" name="submit" value="Trimite"/>

                                                		
											</div>	
										</div>
									</form>
								</section>
							</div>	
                        </div>       
				</section>

					<br>
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