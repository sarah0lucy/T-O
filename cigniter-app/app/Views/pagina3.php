<!DOCTYPE HTML>
<!--
    Hyperspace by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Accesorii</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <h2 class="title">Accesorii</h2>
        <nav>
            <ul>
                <li><a href="<?php echo base_url('/home') ?>">Home</a></li>
                <li><a href="<?php echo base_url('/pagina1') ?>">Haine</a></li>
                <li><a href="<?php echo base_url('/pagina2') ?>">Incaltaminte</a></li>
                <?php
                    if (!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
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

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="inner">
                <form action="" method="post">
                    <input type="text" name="search" placeholder="Search..."><br>
                    <input type="submit" value="Search" name="submit">
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";

                    $search = $_POST['search'];

                    // Conectare la baza de date
                    $dsn = 'mysql:host=localhost;dbname=mysql_db';
                    $username = 'root';
                    $password = 'toor';
                    
                    try {
                        $pdo = new PDO($dsn, $username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Interogare SQL pentru căutare
                        $stmt = $pdo->prepare("SELECT * FROM images WHERE title LIKE :search");
                        $stmt->execute(['search' => '%' . $search . '%']);
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if ($results) {
                            echo "<div class='results'>";
                            foreach ($results as $row) {
                                echo "<div class='result'>";
                                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['title']) . "' />";
                                echo "</div>";
                            }
                            echo "</div>";
                        } else {
                            echo "<p>No results found.</p>";
                        }

                    } catch (PDOException $e) {
                        echo "Database error: " . $e->getMessage();
                    }
                }
                ?>
            </div>
        </section>
    </div>

    <div>
        <form action="" method="post">
            <input type="submit" value="Reset" name="reset">
        </form>
    </div>

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
