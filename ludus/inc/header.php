<?php
/*
* header.php
*/
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ludus | App Mockup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

    <div class="demo-logo"><img src="img/logo-white.png" alt=""></div>
    <div class="phone"></div>

    <?php load_notes(); ?>
    <?php load_gist(); ?>

    <div class="demo-buttons">
        <button class="button button--primary button--demo" data-sn-type="source">View Source</button>
        <button class="button button--primary button--demo" data-sn-type="notes">View Notes</button>
    </div>

