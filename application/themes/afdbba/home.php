<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');

?>
    <div id="GeneralWrapper" class="<?php echo $c->getPageWrapperClass()?>">
        <div class="open-menu-fix">
            <a class="menu-mobile-fix"><i class="fa fa-bars"></i></a>
        </div>

        <header>
            <div class="container top_header">
                <a href="<?php echo BASE_URL ?>"><span class="logo"><img src="<?php echo $this->getThemePath()?>/dist/img/logo.svg" alt="AFDBBA"></span></a>
                <a class="menu-mobile"><i class="fa fa-bars"></i></a>
            </div>
            <div class="container visuel">
                <div class="header_main_visuel_wrapper">
                    <img class="visu_up lazyload" data-src="<?php echo $this->getThemePath()?>/dist/img/main_up.png" src="<?php echo $this->getThemePath()?>/dist/img/main_up_low.png"" alt="le dodgeball beach tournament 2016"/>
                    <img class="visu_middle lazyload" data-src="<?php echo $this->getThemePath()?>/dist/img/main_visuel.png" src="<?php echo $this->getThemePath()?>/dist/img/main_visuel_low.png" alt="le dodgeball beach tournament 2016"/>
                    <img class="visu_down lazyload" src="<?php echo $this->getThemePath()?>/dist/img/main_down_low.png" data-src="<?php echo $this->getThemePath()?>/dist/img/main_down.png" alt="le dodgeball beach tournament 2016"/>
                </div>
            </div>
            <a class="next-slide" href="#introduction">Infos & inscriptions<br><i class="fa fa-angle-down"></i></a>
        </header>

        <div class="cache-menu-actif"></div>
        <div class="menu">
            <div class="main-menu">
                <i class="fa fa-times close-menu"></i>
                <nav>
                    <ul class="hidden-xs">
                        <li><a href="#introduction">Infos & Inscription</a></li>
                        <li><a href="#programme">Programme</a></li>
                        <li><a href="#hebergement">Transport & Logement</a></li>
                        <li><a href="#equipe">Les équipes</a></li>
                        <li><a href="#download">Documents</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <hr class="hidden-xs">
                    <?php
                    $ga = new GlobalArea('Nav More');
                    $ga->display($c);
                    ?>
                    <?php $this->inc('elements/facebook.php');?>
                </nav>
            </div>
        </div>
        <div id="global_content">
            <!--  BLOC TEXTE  -->
            <section class="container-fluid padded-vertical padded-horizontal introduction" id="introduction">
                <div class="container">
                    <span class="prelude"></span>
                    <h1>Le Dodgeball Beach Tournament 2016</h1>
                    <span class="subtitle orange">17 et 18 juin 2016, Plage de <a href="#map" title="C'est où ?">Portalban</a></span>
                    <hr>
                    <p>Du soleil, du fun, de la bonne humeur, du sable chaud. Un tournoi décomplexé de balle à deux camps sur la plage de Portalban.
                        Certaines expériences se définissent en dehors du temps et de son espace, le seul moyen de les comprendre, c'est de s'y risquer;)</p>
                        <p><b><br>FONCE, VIENS, VAS-Y!</b></p>
                    <a class="button calltoaction js-suscription"><i class="fa fa-pencil"></i> Inscrire mon équipe</a><a title="Voir la vidéo 2014" class="fancybox fancybox.iframe calltoaction button video" href="http://www.youtube.com/embed/Hb69g7wN0Qc?autoplay=1"><i class="fa fa-play"></i> Voir la vidéo !</a>
                </div>
            </section>
            <section class="container-fluid padded-vertical team-form" id="inscription">
                <div class="container" id="formblock19">
                    <div class="titled">
                        <h2>Inscription au tournoi</h2>
                        <span class="subtitle orange">Veuillez remplir le formulaire suivant:</span>
                        <hr>
                    </div>
                    <?php
                    $a = new Area('form');
                    $a->display($c);
                    ?>
                </div>
            </section>


            <section class="content-table container nopadding">
                <div id="programme" class="item-arg">
                    <span class="cache-end-bloc"></span>
                    <div class="item-arg-content">
                        <div class="titled">
                            <h2>Programme</h2>
                            <hr>
                        </div>
                        <div class="item-arg-animated-content">
                            <h4>Samedi 18 juin 2016</h4>
                            <table>
                                <tr>
                                    <td>09:00</td><td>Accueil des équipes</td>
                                </tr>
                                <tr>
                                    <td>10:00</td><td>Début des matchs de pools</td>
                                </tr>
                                <tr>
                                    <td>11:30-13:30</td><td>Repas de Midi<br>(sans interruption des matchs)</td>
                                </tr>
                                <tr>
                                    <td>17:30</td><td>Phases finales</td>
                                </tr>
                                <tr>
                                    <td>19:30</td><td>Souper du soir</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="navette" class="item-arg bus">
                    <span class="cache-end-bloc"></span>
                    <div class="item-arg-content">
                        <div class="titled">
                            <h2>Transport & Navette</h2>
                            <hr>
                        </div>
                        <div class="item-arg-animated-content">
                            <p><b class="orange">L'AFDBBA</b> organise le samedi un service de bus-navette à partir de la gare de Payerne.</p>
                            <table>
                                <tr>
                                    <td><b>Départ</b></td><td></td><td><b>Arrivée</b></td>
                                </tr>
                                <tr>
                                    <td>08:35</td><td>Payerne -> Portalban</td><td>08:50</td>
                                </tr>
                                <tr>
                                    <td>09:35</td><td>Payerne -> Portalban</td><td>09:50</td>
                                </tr>
                                <tr>
                                    <td>20:10</td><td>Portalban -> Payerne</td><td>20:25</td>
                                </tr>
                                <tr>
                                    <td>21:10</td><td>Portalban -> Payerne</td><td>21:25</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-table container nopadding">
                <div id="hebergement" class="item-arg sleep">
                    <span class="cache-end-bloc"></span>
                    <div class="item-arg-content">
                        <div class="titled">
                            <h2>Hébergement</h2>
                            <hr>
                        </div>
                        <div class="item-arg-animated-content">
                            <p>Tout joueur a le droit de profiter d'un repos bien mérité. Que ceux qui souhaitent dormir sur place se réjouissent, car un camping doté de toutes les commodités se trouve à deux minutes du tournoi à pied.
                                <br>
                                <a class="button primary" target="_blank" href="http://www.delley-portalban.ch/camping_tarifs.htm">Informations et réservations</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="food" class="item-arg food">
                    <span class="cache-end-bloc"></span>
                    <div class="item-arg-content">
                        <div class="titled">
                            <h2>Repas & boisson</h2>
                            <hr>
                        </div>
                        <div class="item-arg-animated-content">
                            <p><strong>Durant toute la journée, les joueurs ont la possibilité d'apaiser leur faim à notre stand grillades, également pourvu de légumes et de salades.</strong></p>
                            <p> Quant au soir, les plus affamés peuvent goûter à un repas plus consistant afin de récupérer efficacement des efforts fournis lors du tournoi.</p>
                            <p>  Bien entendu, la soif n'est pas oubliée et tout le nécessaire à l'étancher peut être acheté à nos stands pour un prix tout à fait raisonnable: <br>bières & minérales à 3CHF. </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="equipe" class="team padded-vertical grey">
                <div class="container">
                    <div class="titled">
                        <?php $pageequipe = Page::getByID(158); ?>
                        <h2>Equipes inscrites</h2>
                        <a href="<?php echo BASE_URL ?>/teams"><?php echo $pageequipe->getNumChildrenDirect();?> de 60</a>
                        <hr>
                    </div>
                    <div class="row">
                        <?php
                        $a = new Area('home team');
                        $a->display($c);
                        ?>
                    </div>
                    <div class="row" style="text-align: center; margin-top: 20px;">
                        <a href="<?php echo BASE_URL ?>/teams" class="button calltoaction">Voir les équipes</a>
                    </div>
                </div>
            </section>

            <div class="container-fluid galleries">
                <div class="row">
                    <?php
                    $fs = FileSet::getByName('featured_image');
                    $fl = new FileList();
                    $fl->filterBySet($fs);
                    $fl->sortBy('fsDisplayOrder', 'asc');
                    $files = $fl->getResults();
                    $i= 0;
                    $totalImage = count($files);

                    foreach($files as $f) {
                        $i++;

                        $img = Core::make('html/image', array($f));
                        $type = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle("file_manager_listing");
                        if (is_object($f)) {
                            $src = $f->getThumbnailURL($type->getDoubledVersion());

                                if($i == 1){
                                    echo "<div class=\"col-sm-4 pull-left nopadding img-wrapper hidden-xs\">";
                                }
                                echo '<div class="col-xs-4 nopadding gallery-item "><a class="fancybox" data-fancybox-group="fancybox-thumb" href="'.$f->getURL().'"><img class="lazyload" src="'.$this->getThemePath().'/dist/img/default.gif" data-src="'.$src.'" alt="'.$f->getTitle().'" width="'.$type->getWidth().'" height="'.$type->getHeight().'"></a></div>';
                                if($i == 9){
                                    echo '</div><div class="col-sm-4 nopadding social-call"><div class="content"><div class="social-wrapper">Pour voir l\' intégralité des photos:<br><a target="_blank" href="https://www.facebook.com/dodgeballbeachtournament/?ref=hl"><img src="'.$this->getThemePath().'/dist/img/facebook_logo.png" alt="Logo Facebook"></a><a target="_blank" href="https://www.instagram.com/afdbba/"><img src="'.$this->getThemePath().'/dist/img/instagram_logo.png" alt="Logo Instagram"></a></div></div></div><div class="col-sm-4 pull-right nopadding img-wrapper">';
                                }
                                if($i == 18){
                                    echo "</div>";
                                    break;
                                }
                        }

                    } ?>
                </div>
            </div>

            <section class="container-fluid padded-vertical padded-horizontal download-section" id="download">
                <div class="container">
                    <div class="titled">
                        <h2>Documents utiles</h2>
                        <span class="subtitle orange">Téléchargez ici les documents relatifs au tournoi.</span>
                        <hr>
                    </div>
                   <div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                       <?php
                       $fileset = FileSet::getByName('download');
                       $fileslist = new FileList();
                       $fileslist->filterBySet($fileset);
                       $fileslist->sortBy('fsDisplayOrder', 'asc');
                       $documents = $fileslist->getResults();

                       foreach($documents as $doc){
                           if($doc->getAttribute('inactive') == 1){
                              $icon =  '<i class="fa fa-chain-broken"></i>';
                               $link = '';
                               $class= 'not-active';
                               $sup ='<br><small class="inactive">indiponible pour le moment</small>';
                           }else{
                               $icon =  '<i class="fa fa-file-pdf-o"></i>';
                               $link = $doc->getDownloadURL();
                               $class = '';
                               $sup ="";

                           }

                           ?>
                           <div class="col-sm-4">
                               <a  class="<?php echo $class ?>" title="<?php echo $doc->getTitle();?>" href="<?php echo $link;?>"><span class="doc-icon"><?php echo $icon ?></span><br><?php echo $doc->getTitle();?><?php echo $sup ?></a>
                           </div>
                       <?php } ?>
                   </div>
                </div>
            </section>

            <?php $this->inc('elements/contact.php');?>
        </div>
        <div id="map"></div>
        <?php $this->inc('elements/footer_content.php');?>
    </div>
        <?php
        $this->inc('elements/footer.php');
        ?>

