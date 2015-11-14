<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$lh = Loader::helper('section', 'multilingual');
$cl = substr($lh->getLanguage(),0,2);
$ih = Loader::helper('image');
$defimg = 1482;
$img = $c->getAttribute('image_header');
    if($img != File::getByID($defimg) && $img > 0){
    $img = $img;
    }elseif($getimg != NULL){
    $img = File::getByID($getimg);
    }else{
    $img = File::getByID($defimg);
    }

$thumb = $ih->getThumbnail($img, 1200, 250, true);

switch($cl){
    case 'de':
    setlocale (LC_TIME, 'de_DE');
     $this->inc('elements/header_de.php');
    break;
    default:
    setlocale (LC_TIME, 'fr_FR');
      $this->inc('elements/header.php');
  }


?>



<div class="general-wrapper">
			<?php 
		// we use the "is edit mode" check because, in edit mode, the bottom of the area overlaps the item below it, because
		// we're using absolute positioning. So in edit mode we add a bit of space so everything looks nice.
		if (!$c->isEditMode()) { ?>
			<div class="spacer"></div>
		<?php  } ?>		

            <div class="header-wrapper">
                <div class="header-container">
                    <h1 class="logo"><a href="<?= $this->url(substr($cl,0,2)) ?>"><img src="<?= $this->getThemePath() ?>/img/template/logo.png" alt="logo Dodgeball" /></a></h1>
                    <div class="right_header">
                        <div id="SwitchLanguage">
                            <?php $a = new GlobalArea('SwitchLanguage');
                                $a->display(); 
                                ?>
                        </div>
                    </div>
                </div><!-- "end header-container" -->
            </div> <!-- end header-wrapper -->
            <div class="header_image" style="background:url('<?php echo $thumb->src ?>') no-repeat; background-size:100%;"></div>
            <div class="navig-wrapper">
                <div class="navig-container">
                    <?php $a = new GlobalArea('Navigation');
                        $a->display(); 
                        ?>
                </div><!-- "end navig-container" -->
            </div> <!-- end navig-wrapper -->

            <div class="content-wrapper">

                <div class="content-container">
                    <div class="content-left-container">
                        
                        
                        <?php $a = new GlobalArea('BreadCrump');
                        $a->display(); 
                        ?>
                        <?php $a = new Area('Content Page');
                        $a->display($c); 
                        ?>
                    </div><!-- "end content-left-container" -->
                    <div class="sidebar-left-container">
                        <?php $a = new Area('Sidebar');
                        $a->display($c); 
                        ?>
                        <?php $a = new GlobalArea('Facebook');
                        $a->display(); 
                        ?>
                    </div><!-- "end sidebar-left-container" -->

                     <div class="spacer" style="clear:both;"></div>
                     
                </div><!-- "end content-container" -->
                <div class="members-wrapper">
              <div class="members-container">

                <?php $a = new GlobalArea('Members Logos');
                $a->display(); 
                ?>
              </div>
            </div>
            </div> <!-- end content-wrapper -->

            <div class="footer-wrapper">
                <div class="footer-container">
                    <div class="footer_1">
                        <div class="left">
                         <?php $a = new GlobalArea('Bottom Certifications');
                        $a->display(); 
                        ?>
                        </div>
                        <div class="right">
                            <?php $a = new GlobalArea('Bottom Menu');
                        $a->display(); 
                        ?>
                        </div>
                        <div class="spacer" style="clear:both;"></div>
                    </div>
                    <div class="footer_2">
                        <div class="left">
                            ©<?php  echo date('Y')?> copyright AFDBBA
                        </div>
                        <div class="right">
                            <a href="http://www.williamchristen.net" target="_blank">William Christen // Conception & Réalisation</a>
                        </div>
                        <div class="spacer" style="clear:both;"></div>
                    </div>
                </div><!-- "end footer-container" -->
            </div> <!-- end footer-wrapper -->
        </div><!-- "end general-wrapper" -->
<?php  $this->inc('elements/footer.php'); ?>