<?php
require_once(dirname(__FILE__).'/../defines.php');// Inclusion des defines
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?= SITE_NAME ?></title>
    <link rel="stylesheet" href="style/main.css"/>
</head>
<body>
<div id="wrapper">
    <header>
        <?php require('menu.php'); ?>
        <?php require('login_logout_form.php'); ?>
    </header>


