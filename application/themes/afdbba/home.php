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
                <div class="header_main_visuel">
                    <div class="header_main_visuel_wrapper">
                        <img src="<?php echo $this->getThemePath()?>/dist/img/main_visuel.png" alt="le dodgeball beach tournament 2016"/>
                    </div>
                </div>
            </div>


            <a class="next-slide" href="#introduction">Infos & inscriptions<br><i class="fa fa-angle-down"></i></a>

            
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
                            <li><a href="#introduction">L'Evénement</a></li>
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
                    <h1><span class="cursive">Le <span class="bigger">Dodgeball</span> Beach Tournament 2016</h1>
                    <span class="subtitle orange">17 et 18 juin 2016, Plage de <a href="#map" title="C'est où ?">Portalban</a></span>
                    <hr>
                    <p>Du soleil, du fun, de la bonne humeur, du sable chaud. Un tournoi décomplexé de balle à deux camps sur la plage de Portalban.
                        Certaines expériences se définissent en dehors du temps et de son espace, le seul moyen de les comprendre, c'est de s'y risquer;)</p>
                        <p><b><br>FONCES, VIENS, VAS-Y!</b></p>
                    <a class="button calltoaction js-suscription"><i class="fa fa-pencil"></i> Inscrire mon équipe</a>
                </div>
            </section>
            <section class="container-fluid padded-vertical team-form" id="inscription">
                <div class="container">
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


            <section class="content-table">
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
                                    <td>12:00</td><td>Pause de Midi</td>
                                </tr>
                                <tr>
                                    <td>13:00</td><td>Reprise des matchs de pools</td>
                                </tr>
                                <tr>
                                    <td>17:30</td><td>Phase finale</td>
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
                                    <td>08:40</td><td>Payerne -> Portalban</td><td>09:00</td>
                                </tr>
                                <tr>
                                    <td>09:40</td><td>Payerne -> Portalban</td><td>10:00</td>
                                </tr>
                                <tr>
                                    <td>20:10</td><td>Portalban -> Payerne</td><td>20:30</td>
                                </tr>
                                <tr>
                                    <td>21:10</td><td>Portalban -> Payerne</td><td>21:30</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-table">
                <div id="programme" class="item-arg sleep">
                    <span class="cache-end-bloc"></span>
                    <div class="item-arg-content">
                        <div class="titled">
                            <h2>hebergement</h2>
                            <hr>
                        </div>
                        <div class="item-arg-animated-content">
                            <p>Tout jouteur a le droit de profiter d'un repos bien mérité. Que ceux qui souhaitent dormir sur place se réjouissent, car un camping doté de toutes les commodités se trouve à deux minutes du tournoi à pied.
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
                            <p>Durant toute la journée, les joueurs ont la possibilité d'apaiser leur faim à notre stand grillades, également pourvu de légumes et de salades.</p>
                            <p> Quant au soir, les plus affamés peuvent goûter à un repas plus consistant afin de récupérer efficacement des efforts fournis lors du tournoi.</p>
                            <p>  Bien entendu, la soif n'est pas oubliée et tout le nécessaire à l'étancher peut être acheté à nos stands pour un prix tout à fait raisonnable: bières à 3francs, minérales à 2francs. </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team padded-vertical grey">
                <div class="container">
                    <div class="titled">
                        <?php $pageequipe = Page::getByID(158); ?>
                        <h2>Equipes inscrites</h2>
                        <a href="/teams"><?php echo $pageequipe->getNumChildrenDirect();?> de 60</a>
                        <hr>
                    </div>
                    <div class="row">
                        <?php
                        $a = new Area('home team');
                        $a->display($c);
                        ?>
                    </div>
                    <div class="row" style="text-align: center; margin-top: 20px;">
                        <a href="/teams" class="button calltoaction">Voir les équipes</a>
                    </div>
                </div>
            </section>
            <section class="container-fluid introduction" id="gallerie">
                <div class="container">
                    <div class="img-container"></div>
                </div>
            </section>
            <section class="container-fluid padded-vertical team-form" id="inscription">
                <div class="container">
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
                                echo '<div class="col-xs-4 nopadding gallery-item "><a class="fancybox" rel="fancybox-thumb" href="'.$f->getURL().'"><img src="'.$src.'" alt="'.$f->getTitle().'" width="'.$type->getWidth().'" height="'.$type->getHeight().'"></a></div>';
                                if($i == 9){
                                    echo '</div><div class="col-sm-4 nopadding social-call"><div class="content"><div class="social-wrapper">Pour voir l\' intégralité des photos:<br><a target="_blank" href="https://www.facebook.com/dodgeballbeachtournament/?ref=hl"><img src="'.$this->getThemePath().'/dist/img/facebook_logo.png"></a><a target="_blank" href="https://www.instagram.com/afdbba/"><img src="'.$this->getThemePath().'/dist/img/instagram_logo.png"></a></div></div></div><div class="col-sm-4 pull-right nopadding img-wrapper">';
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
            <section class="container-fluid padded-vertical team-form" id="inscription">
                <div class="container">
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
                            <span itemprop="email" class="orange"><a class="dia-obfuscated" href="#" data-obfuscated="info@dodgeball.ch"></a></span><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>

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
                <div class="col-sm-4">
                    <?php
                    $a = new GlobalArea('Share Links');
                    $a->display($c);
                    ?>
                </div>
                <ul class="col-sm-8">
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

