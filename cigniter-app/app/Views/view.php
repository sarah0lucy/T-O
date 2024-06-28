<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Incaltaminte</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

    <header id="header">
			<nav>
					<ul>
						
						<?php
									if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
								?>
								<li><a href="<?php echo base_url('/pagina4') ?>" style="color:pink">Sign Up</a></li>
								<li><a href="<?php echo base_url('/login') ?>" style="color:coral">Log In</a></li>
								<?php
									} elseif (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
								?>
								<li><a href="<?php echo base_url('/logout') ?>" style="color:brown">Log Out</a></li>
								<?php
									}
								?>
					</ul>
				</nav>
			</header>

        


    <table>
        <tr>
            <td><strong>Nume</strong></td>
            <td><strong>Imagine</strong></td>
            <td colspan="3" align="center"><strong>Actions</strong></td>
        </tr>
        <?php foreach($images as $var) { ?> 
            <tr>
                <td><?php echo $var['title'];?></td>
                <td><img src="<?php echo base_url($var['image']);?>" width="100" height="100"></td>
                <td align="center">
                    <?php echo anchor(array('/view/',$var['id']), 'View'); ?>
                    <?php echo anchor(array('/edit/',$var['id']), 'Edit');?>
                    <?php echo anchor(array('/delete/',$var['id']), 'Delete', array('onclick'=> "return confirm('Vrei sa stergi aceasta poza?')"));?>

                </td>
            </tr>
        <?php }?>
    </table>
    
    <?php echo anchor(array('/upload/'), 'Upload another image', ['style' => 'color: red;']); ?>

<br><br>
<br/><a href="<?= base_url('/home') ?>">Back to Home</a>
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
