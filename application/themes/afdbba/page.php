<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');

?>

<div id="GeneralWrapper" class="<?php echo $c->getPageWrapperClass()?>">
    <div class="open-menu-fix">
        <a class="menu-mobile-fix"><i class="fa fa-bars"></i></a>
    </div>

    <header class="inpage">
        <div class="container top_header">
            <a href="<?php echo BASE_URL ?>"><span class="logo"><img src="<?php echo $this->getThemePath()?>/dist/img/logo.svg" alt="AFDBBA"></span></a>
            <a class="menu-mobile"><i class="fa fa-bars"></i></a>
        </div>
        <div class="container inpage-visuel">
            <div class="inpage-visuel-wrapper">
                <img src="<?php echo $this->getThemePath()?>/dist/img/full_visuel.png" alt="le dodgeball beach tournament 2016"/>
            </div>
        </div>
    </header>

    <div class="cache-menu-actif"></div>
    <div class="menu">
        <div class="main-menu">
            <i class="fa fa-times close-menu"></i>
            <nav>
                <?php
                $ga = new GlobalArea('Nav More');
                $ga->display($c);
                ?>
                <?php $this->inc('elements/facebook.php');?>

            </nav>
        </div>
    </div>

    <div id="global_content" class="inpage_content">

        <!-- ------------------ BLOC TEXTE ------------------ -->
        <section>
            <div class="container inpage_content_container inpage_content_container--text">
                <?php
                $ga = new GlobalArea('Bread Crump');
                $ga->display($c);
                ?>
                <?php
                $a = new Area('content');
                $a->display($c);
                ?>
            </div>
        </section>
        <?php $this->inc('elements/contact.php');?>
    </div>

    <?php $this->inc('elements/footer_content.php');?>
</div>
<?php
$this->inc('elements/footer.php');
?>