<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $judul ?> | Web Programming</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css" type="text/css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Web BSI</h1>
                <h3>Info Seputar Kampus BSI</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() .'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() .'index.php/web/blog' ?>">Blog</a></li>
                    <li><a href="<?php echo base_url() .'index.php/web/about' ?>">User</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>