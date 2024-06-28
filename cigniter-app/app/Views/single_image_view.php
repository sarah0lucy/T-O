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
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
    <noscript><link rel="stylesheet" href="<?= base_url('assets/css/noscript.css') ?>" /></noscript>
</head>
<body class="is-preload">

<header id="header">
    <nav>
        <ul>
            <?php if (!isset($_COOKIE['username']) && !isset($_COOKIE['password'])): ?>
                <li><a href="<?= base_url('/pagina4') ?>" style="color:pink">Sign Up</a></li>
                <li><a href="<?= base_url('/login') ?>" style="color:coral">Log In</a></li>
            <?php elseif (isset($_COOKIE['username']) && isset($_COOKIE['password'])): ?>
                <li><a href="<?= base_url('/logout') ?>" style="color:brown">Log Out</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<main>
    <h2><?= esc($image['title']); ?></h2>
    <h2><img src="<?= base_url($image['image']); ?>" width="100" height="100" alt="<?= esc($image['title']); ?>"></h2>

    <a href="<?= base_url('pagina2') ?>">Back</a>
</main>

<!-- Footer -->
<footer id="footer" class="wrapper alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; Untitled. All rights reserved.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.scrollex.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.scrolly.min.js') ?>"></script>
<script src="<?= base_url('assets/js/browser.min.js') ?>"></script>
<script src="<?= base_url('assets/js/breakpoints.min.js') ?>"></script>
<script src="<?= base_url('assets/js/util.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>
</html>
