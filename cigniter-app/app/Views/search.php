<!DOCTYPE HTML>
<html>
<head>
    <title>Accesorii</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
    <noscript><link rel="stylesheet" href="<?= base_url('assets/css/noscript.css') ?>" /></noscript>
</head>
<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <h2 class="title">Accesorii</h2>
        <nav>
            <ul>
                <li><a href="<?= base_url('/home') ?>">Home</a></li>
                <li><a href="<?= base_url('/pagina1') ?>">Haine</a></li>
                <li><a href="<?= base_url('/pagina2') ?>">Incaltaminte</a></li>
                <?php if (!isset($_COOKIE['username']) && !isset($_COOKIE['password'])): ?>
                    <li><a href="<?= base_url('/pagina4') ?>" style="color:pink">Sign Up</a></li>
                    <li><a href="<?= base_url('/login') ?>" style="color:coral">Log In</a></li>
                <?php else: ?>
                    <li><a href="<?= base_url('/logout') ?>" style="color:brown">Log Out</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="inner">
                <form action="<?= base_url('/search') ?>" method="post">
                    <input type="text" name="search" placeholder="Search..."><br>
                    <input type="submit" value="Search" name="submit">
                </form>



                <?php if (isset($results)): ?>
                    <?php if (!empty($results)): ?>
                        <div class='results'>
                            <?php foreach ($results as $row): ?>
                                <div class='result'>
                                <h3><?= $row['title'] ?></h3>
                                <img src='<?= $row['image'] ?>' alt='<?= $row['title'] ?>' />

                                </div>
                            <?php endforeach; ?>
                        </div>
                  
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>

    
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
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.scrollex.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.scrolly.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/browser.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/breakpoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/util.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>
</html>
