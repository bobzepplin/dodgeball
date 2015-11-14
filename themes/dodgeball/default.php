<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
$ih = Loader::helper('image');
$img = $c->getAttribute('image_header');
$thumb = $ih->getThumbnail($img, 640, 125, true);
if (isset($img)){ 
   $image_header = '<div class="header_image"><img src="'.$thumb->src.'" style="width:'.$thumb->width.'; height:'.$thumb->height.'" alt="Image de Header" /></div>';
}else {
    $image_header = NULL;
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
                    <h1 class="logo"><a href="<?php echo DIR_REL?>/"><img src="<?= $this->getThemePath() ?>/img/template/microfinish_logo.gif" alt="logo microfinish" /></a></h1>
                </div><!-- "end header-container" -->
            </div> <!-- end header-wrapper -->

            <div class="content-header-wrapper">
                <div class="content-header-container">
                <h2><?php echo $c->getCollectionName(); ?></h2>
                <?php   // $a = new Area('Title Page');
                        // $a->display($c);
                        ?>
                <?php $a = new GlobalArea('BreadCrump');
                        $a->display(); 
                        ?>
               
                </div><!-- "end content-header-container" -->
            </div> <!-- end content-header-wrapper -->

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
                        <?php echo $image_header ?>
                        <?php $a = new Area('Content Page');
                        $a->display($c); 
                        ?>
                    </div><!-- "end content-left-container" -->
                    <div class="sidebar-left-container">
                        <?php $a = new Area('Sidebar');
                        $a->display($c); 
                        ?>
                    </div><!-- "end sidebar-left-container" -->

                     <div class="spacer" style="clear:both;"></div>
                     
                </div><!-- "end content-container" -->
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
                            ©<?php  echo date('Y')?> copyright Microfinish
                        </div>
                        <div class="right">
                            <a href="http://www.diabolo.com" target="_blank">diabolo design // visual strategy</a>
                        </div>
                        <div class="spacer" style="clear:both;"></div>
                    </div>
                </div><!-- "end footer-container" -->
            </div> <!-- end footer-wrapper -->
        </div><!-- "end general-wrapper" -->
<?php  $this->inc('elements/footer.php'); ?>