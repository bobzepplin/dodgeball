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
    <div id="GeneralWrapper" class="<?php echo $c->getPageWrapperClass()?>">

        <div id="global_content" class="inpage_content">

            <!-- ------------------ BLOC TEXTE ------------------ -->
            <section id="teamPage">
                <?php
                $teamName = $c->getCollectionName();
                $description = $c->getCollectionDescription();
                $team_slogan = $c->getAttribute('team_slogan');
                $captain = $c->getAttribute('captain');
                $team_name = $c->getAttribute('team_name');
                $team_type = $c->getAttribute('team_type');
                $team_trophy = $c->getAttribute('team_trophy');
                $team_fairplay = $c->getAttribute('team_fairplay');

                $image = $c->getAttribute("team_image");
                $defaultImageID = 9;
                if (is_object($image)) {
                    $img = Core::make('html/image', array($image));
                    $type = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle("team_image_thumb");
                    $Cimage = $image->getThumbnailURL($type->getBaseVersion());
                }
                else {
                    $image = \File::getByID($defaultImageID);
                    $img = Core::make('html/image', array($image));
                    $type = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle("team_image_thumb");
                    $Cimage = $image->getThumbnailURL($type->getBaseVersion());
                }

                ?>
                <div class="header-team-page">
                    <img src="<?php echo $Cimage ?>" />
                </div>
                <h2><?php echo $teamName?></h2>
                <h5>"<?php echo $team_slogan?>"</h5>
                <p><strong>Type d'équipe:</strong>
                    <?php switch ($team_type) {
                        case 'femmes':
                            echo '<i class="fa fa-female"></i> <i class="fa fa-female"></i> <i class="fa fa-female"></i> <i class="fa fa-female"></i> <i class="fa fa-female"></i>';
                            break;
                        case 'hommes':
                            echo '<i class="fa fa-male"></i> <i class="fa fa-male"></i> <i class="fa fa-male"></i> <i class="fa fa-male"></i> <i class="fa fa-male"></i>';
                            break;
                        case 'mixte':
                            echo '<i class="fa fa-female"></i> <i class="fa fa-female"></i> <i class="fa fa-female"></i> <i class="fa fa-male"></i> <i class="fa fa-male"></i>';
                            break;
                        default:
                            echo '<i class="fa fa-female"></i> <i class="fa fa-female"></i> <i class="fa fa-female"></i> <i class="fa fa-male"></i> <i class="fa fa-male"></i>';
                    } ?>
                    <br>
                    <strong>Leader: </strong><?php echo $captain ?><br>
                    <?php if($team_fairplay) {
                        echo '<strong>Fair-play: </strong>';
                        foreach($team_fairplay as $fairplay){
                            echo '<i class="fa fa-thumbs-up"></i> ' . $fairplay .' ';
                        } ?>
                    <?php } ?>

                    <?php if($team_trophy) {
                        echo '<strong>Victoire(s): </strong>';
                        foreach($team_trophy as $trophy){
                            echo '<i class="orange fa fa-trophy"></i> ' . $trophy .' ';
                        } ?>
                    <?php } ?>


                </p>
                <div class="col-xs-12 nopadding additionnal-info">
                    <?php if($description !== ''){?>
                        <h4>Description:</h4>
                    <?php } ?>
                    <p><?php echo $description ?></p>

                </div>


            </section>
        </div>

    </div>

<?php Loader::element('footer_required'); ?>

</body>
</html>