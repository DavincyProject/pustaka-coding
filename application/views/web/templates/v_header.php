<!DOCTYPE html>
<html>

<head>
    <meta charset=”utf-8”>
    <title><?= $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()
                                                    ?>assets/css/stylebuku.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan
                    CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">About</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/web/form' ?>">Form</a></li>
                </ul>
            </nav>
            <div class="clear">
            </div>
        </header>