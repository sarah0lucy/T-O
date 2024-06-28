<!DOCTYPE HTML>
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
                    <?php if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])): ?>
                        <li><a href="<?= base_url('/pagina4') ?>" style="color:pink">Sign Up</a></li>
                        <li><a href="<?= base_url('/login') ?>" style="color:coral">Log In</a></li>
                    <?php elseif (isset($_COOKIE['username']) && isset($_COOKIE['password'])): ?>
                        <li><a href="<?= base_url('/logout') ?>" style="color:brown">Log Out</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>

        <?php
            $title = [
                'name' => 'title',
                'id' => 'text1',
                'placeholder' => 'Da un nume pozei',
                'maxlength' => '100',
                'size' => '30',
            ];

            $poza = [
                'name' => 'poza',
                'id' => 'poza',
                'type' => 'file',
            ];

            helper('form');
            echo form_open_multipart('/save');
        ?>

        <table>
            <tr>
                <td>Titlu</td>
                <td><?= form_input($title); ?></td>
            </tr>
			<br>
            <tr>
                <td>Imagine</td>
                <td><?= form_upload($poza); ?></td>
            </tr>
			<br>
            <tr>
                <td><br></td><br>
                <td><?= form_submit('submit', 'Save'); ?></td>
            </tr>
        </table>

        <?= form_close(); ?>
    </body>
</html>
