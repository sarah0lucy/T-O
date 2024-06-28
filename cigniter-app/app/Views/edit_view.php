
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
helper('form');
echo form_open_multipart('/update');
$data1=[
    'name'=>'title',
    'id'=>'title',
    'value'=>$image['title'],
    'maxlength'=>'100',
    'size'=>'30',
];

$data2=[
    'name'=>'poza',
    'id'=>'poza',
    'value'=>$image['image'],
    'maxlength'=>'100',
    'size'=>'30',
];

$data3=[
    'name'=>'id',
    'id'=>'id',
    'type'=>'hidden',
    'value'=>$image['id'],
    'maxlength'=>'100',
    'size'=>'30',
];
?>

<?php echo form_input($data3);?>

<table>
    <tr>
        <td><?php echo form_label('Title', 'title');?></td>
        <td><?php echo form_input($data1);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Image', 'poza');?></td>
        <td><?php echo form_upload($data2);?></td>
    </tr>
</table>

<h2><img src="<?php echo base_url($image['image']);?>" width="100" height="100"></h2>
<?php echo form_submit('submit','Update');?>

    </body>
</html>
