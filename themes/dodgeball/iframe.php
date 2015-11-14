<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$lh = Loader::helper('section', 'multilingual');
$cl = substr($lh->getLanguage(),0,2);
    switch($cl){
    case 'de':
    setlocale (LC_TIME, 'de_DE');
      $iframe_content = "iframe-content-de";
    break;
    default:
    setlocale (LC_TIME, 'fr_FR');
       $iframe_content = "iframe-content";
  }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<?php  Loader::element('header_required'); ?>   

<!-- Site Header Content //-->
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('css/normalize.min.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('typography.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('css/main.css')?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300' rel='stylesheet' type='text/css'>

<script src="<?= $this->getThemePath() ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<!--[if IE]>
                 <style type="text/css">
                     .timer { display: none !important; }
                     div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
                </style>
            <![endif]-->

</head>
 <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<div class="iframe-wrapper">
<div class="iframe_content">
            <?php 
        // we use the "is edit mode" check because, in edit mode, the bottom of the area overlaps the item below it, because
        // we're using absolute positioning. So in edit mode we add a bit of space so everything looks nice.
        if (!$c->isEditMode()) { ?>
            <div class="spacer"></div>
        <?php  } ?>     

                        <?php $a = new Area($iframe_content);
                        $a->display($c); 
                        ?>

        </div><!-- "end iframe-content" -->
    </div>

<?php  Loader::element('footer_required'); ?>

</body>
</html>