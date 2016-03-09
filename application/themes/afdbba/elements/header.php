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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>


    <link href="<?php echo $this->getThemePath()?>/app/components/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath()?>/app/components/fancybox/helpers/jquery.fancybox-thumbs.css" rel="stylesheet">

    <link href="<?php echo $this->getThemePath()?>/dist/css/screen.css" rel="stylesheet">


    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!------------------- MESSAGE DE MAJ POUR IE8 ------------------->
    <!--[if lte IE 8]>
    <link href="<?php echo $this->getThemePath()?>dist/css/ie.css" rel="stylesheet">
    <![endif]-->

</head>
<body>

<div class="messageIe">
    <span class="cache-slide"></span>
    <div class="centerIe">
        <a class="" href=""><img width="auto" src="dist/img/logo.png" alt="André Liechti" title="André Liechti"></a><br><br>
        <hr><br>
        You are using an outdated version of Internet Explorer.<br>
        Please upgrade your browser :<br><br>
        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank"><img src="dist/img/ie.png" width="50" alt="internet explorer" title="internet explorer"></a>
    </div>
</div>