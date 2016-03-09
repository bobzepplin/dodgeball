<?php
defined('C5_EXECUTE') or die("Access Denied.");
$th = Loader::helper('text');
$c = Page::getCurrentPage();
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
?>

<?php if ( $c->isEditMode() && $controller->isBlockEmpty()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.')?></div>
<?php } else { ?>



    <?php

    foreach ($pages as $page):

		$title = $th->entities($page->getCollectionName());
		$url = ($page->getCollectionPointerExternalLink() != '') ? $page->getCollectionPointerExternalLink() : $nh->getLinkToCollection($page);
		$description = $page->getCollectionDescription();
		$description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
		$description = $th->entities($description);
        $team_slogan = $page->getAttribute('team_slogan');
        $captain = $page->getAttribute('captain');
        $team_name = $page->getAttribute('team_name');
        $team_type = $page->getAttribute('team_type');
        $team_trophy = $page->getAttribute('team_trophy');
        $team_fairplay = $page->getAttribute('team_fairplay');

        $image = $page->getAttribute("team_image");
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

        <div class="col-sm-4 team-item">
            <div class="team-item-inside">
                <div class="team-item-image">
                    <div class="team-item-logo"><img src="<?php echo $Cimage ?>" class="img-responsive" /></div>
                </div>
                <div class="team-item-content">
                    <h4><?php echo $th->wordSafeShortText($title, 30) ?></h4>
                    <p class="team-item-slogan"><?php echo $th->wordSafeShortText($team_slogan, 30) ?></p>
                    <div class="row">
                        <div class="col-xs-12">
                                <?php switch ($team_type) {
                                    case 'femmes':
                                        echo 'Femme: <i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i>';
                                        break;
                                    case 'hommes':
                                        echo 'Homme: <i class="fa fa-male"></i><i class="fa fa-male"></i><i class="fa fa-male"></i><i class="fa fa-male"></i><i class="fa fa-male"></i>';
                                        break;
                                    case 'mixte':
                                        echo 'Mixte: <i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-male"></i><i class="fa fa-male"></i>';
                                        break;
                                    default:
                                        echo 'Mixte: <i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-female"></i><i class="fa fa-male"></i><i class="fa fa-male"></i>';
                                } ?>
                        </div>
                        <div class="col-xs-12">
                        <?php if($team_trophy) {
                            echo 'Victoire(s):';
                            foreach($team_trophy as $trophy){
                                echo '<i class="fa fa-trophy"></i> ' . $trophy .' ';
                                } ?>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-xs-12 nopadding additionnal-info">
                        <h4>Description:</h4>
                        <p><?php echo $description ?></p>
                        <br>
                        <?php if($team_fairplay) {
                            echo 'Prix du Fair-play:';
                            foreach($team_fairplay as $fairplay){
                                echo '<i class="fa fa-thumbs-up"></i> ' . $fairplay .' ';
                            } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>


	<?php endforeach; ?>

    <?php if (count($pages) == 0): ?>
        <div class="ccm-block-page-list-no-pages"><?php echo h($noResultsMessage)?></div>
    <?php endif;?>


<?php } ?>
