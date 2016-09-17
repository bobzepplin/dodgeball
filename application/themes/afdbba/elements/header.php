<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<!doctype html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <?php Loader::element('header_required')?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="William Christen">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:url"           content="<?php echo BASE_URL?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Le dodgeball Beach Tournament 2016" />
    <meta property="og:description"   content="Un tournoi décomplexé de balle à deux camps sur la plage de Portalban le 18 juin 2016. Certaines expériences se définissent en dehors du temps et de son espace, le seul moyen de les comprendre, c'est de s'y risquer;)" />
    <meta property="og:image"         content="<?php echo BASE_URL?>/application/themes/afdbba/dist/img/dodgeball_2016_og_image.jpg" />

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

    <link href="<?php echo $this->getThemePath()?>/dist/css/screen.css" rel="stylesheet">


    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- MESSAGE DE MAJ POUR IE8 -->
    <!--[if lte IE 8]>
    <link href="<?php echo $this->getThemePath()?>/dist/css/ie.css" rel="stylesheet">
    <![endif]-->

</head>
<body>
<div class="messageIe">
    <span class="cache-slide"></span>
    <div class="centerIe">
        You are using an outdated version of Internet Explorer.<br>
        Please upgrade your browser :<br><br>
        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank"><img src="<?php echo $this->getThemePath()?>/dist/img/ie.png" width="50" alt="internet explorer" title="internet explorer"></a>
    </div>
</div>