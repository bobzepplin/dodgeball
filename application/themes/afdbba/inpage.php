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
        <div class="container visuel">
            <div class="header_main_visuel">
                <div class="header_main_visuel_wrapper">
                    <img src="<?php echo $this->getThemePath()?>/dist/img/main_visuel_inpage.png" alt="le dodgeball beach tournament 2016"/>
                </div>
            </div>
        </div>
    </header>
    <div class="cache-menu-actif"></div>
    <div class="menu">
        <div class="main-menu">
            <i class="fa fa-times close-menu"></i>
            <b>MENU</b>
            <hr class="clear clearfix">

            <nav>
                <ul>
                    <li><a href="#GeneralWrapper">Home</a></li>
                    <li><a href="#quisommesnous">L'Evénement</a></li>
                    <li><a href="#programme">Programme</a></li>
                    <li><a href="#transports">Transports</a></li>
                    <li><a href="#logement">Logement</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>


    <div id="global_content">

        <!-- ------------------ BLOC TEXTE ------------------ -->
        <section class="container-fluid padded-vertical padded-horizontal introduction" id="introduction">
            <div class="container">
                <span class="prelude"></span>
                <h1><span class="cursive">Les <span class="bigger">Equipes</span></h1>
                <span class="subtitle orange">17 et 18 juin 2016, Plage de <a href="#map" title="C'est où ?">Portalban</a></span>
                <hr>

            </div>
        </section>




        <div class="container-fluid padded-vertical padded-horizontal bloc-contact" id="contact">
            <span class="cache-end-bloc"></span>
            <div class="container">
                <div class="titled">
                    <h2>Contact</h2>
                    <hr>
                </div>
                <div class="col-xs-12 col-sm-6 bloc-infos">
                    <div class="col-sm-12 col-md-2">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10" >
                        <span class="orange"><b> AFDBBA</b></span>
                        <div>
                            Bastien Collaud<br>
                            1568 Portalban<br>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 bloc-infos"">
                <div class="col-sm-12 col-md-2">
                    <i class="fa fa-paper-plane"></i>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10">
                    <span itemprop="telephone">Tél. +41 79 276 48 14</span><br>
                    <span itemprop="email" class="orange"><a class="dia-obfuscated" href="#" data-obfuscated="info@dodgeball.ch"></a></span><br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid sponsors">
        <div class="container">
            <div class="col-xs-2"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/cuany.jpg" alt="Cuany Electricité"/></div>
            <div class="col-xs-2"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/coraline.jpg" /></div>
            <div class="col-xs-2"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/loterie_romande.jpg" /></div>
            <div class="col-xs-2"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/cardinal.jpg" /></div>
            <div class="col-xs-2"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/developpement.jpg" /></div>
            <div class="col-xs-2"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/raiffesen.jpg" /></div>
        </div>
    </div>


    <div class="container footer">
        <ul>
            <li class="col-xs-6 col-sm-2">
                <a href="#">lien 1</a>
            </li>
            <li class="col-xs-6 col-sm-2">
                <a href="#">lien 1</a>
            </li>
            <li class="col-xs-6 col-sm-2">
                <a href="#">lien 1</a>
            </li>
            <li class="col-xs-6 col-sm-2">
                <a href="#">lien 1</a>
            </li>
            <li class="col-xs-6 col-sm-2">
                <a href="#">lien 1</a>
            </li>
            <li class="col-xs-6 col-sm-2">
                <a href="#">lien 1</a>
            </li>

        </ul>
    </div>

</div>

</div>

<?php
$this->inc('elements/footer.php');
?>

