<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
$lh = Loader::helper('section', 'multilingual');
$cl = substr($lh->getLanguage(),0,2);?>

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
                        <div id="myCountdown"></div>
                    </div>
                    
                </div><!-- "end header-container" -->
            </div> <!-- end header-wrapper -->

            <div class="slider-wrapper">
                <div class="slider-container">
                    <div id="featured">
                        <div class="slide" style="background: url('<?= $this->getThemePath() ?>/img/template/slider_image2.jpg') no-repeat; background-size:100%;">
                            <div class="slider_right">
                                <h2><span>Le 20 juin 2015, plage de portalban</span><br />LE DODGEBALL BEACH TOURNAMENT 2015</h2>
                                <p>Defie tes amis dans un combat de balle au camp unique en suisse.</p>
                                <div class="bt-container">
                                    <a class="bt-noir" href="<?php echo DIR_REL?>/fr/les-news/le-20-21-juin-2014">En savoir plus !</a>
                                    <a class="bt-orange fancy" data-fancybox-type="iframe" href="<?php echo DIR_REL?>/fr/inscription-au-tournoi">Inscrire une équipe!</a>
                                </div>
                            </div>
                        </div>
                </div>
                </div><!-- "end slider-container" -->
            </div> <!-- end slider-wrapper -->

            <div class="navig-wrapper">
                <div class="navig-container">
                    <?php $a = new GlobalArea('Navigation');
                        $a->display(); 
                        ?>
                </div><!-- "end navig-container" -->
            </div> <!-- end navig-wrapper -->

            <div class="content-wrapper">
                <div class="content-container">
                    <div class="homepage-left-container">
                        <?php $a = new Area('Introduction HomePage');
                        $a->display($c); 
                        ?>
                    </div><!-- "end content-left-container" -->
                    <div class="sidebar-left-container homepage-left-container">
                        <?php $a = new Area('Sidebar');
                        $a->display($c); 
                        ?>
                      
                    </div><!-- "end sidebar-left-container" -->

                    <div class="spacer" style="clear:both;"></div>
                    <div id="CommentZone"></div>
                    <div class="highlight-elements">
                        <?php $a = new Area('Highlights');
                        $a->setBlockLimit(3);  
                        $a->display($c); 
                        ?>
                            
                        <div class="spacer" style="clear:both;"></div>
                    </div><!-- "end highlight-elements" -->
                </div><!-- "end content-container" -->
            </div> <!-- end content-wrapper -->
            <div class="members-wrapper">
              <div class="members-container">

                <?php $a = new GlobalArea('Members Logos');
                $a->display(); 
                ?>
              </div>
            </div>
            

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
                            <a href="http://www.williamchristen.net" target="_blank">William Christen // Realisation & Conception</a>
                        </div>
                        <div class="spacer" style="clear:both;"></div>
                    </div>
                </div><!-- "end footer-container" -->
            </div> <!-- end footer-wrapper -->
        </div><!-- "end general-wrapper" -->
<?php  $this->inc('elements/footer.php'); ?>