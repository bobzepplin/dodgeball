
<div class="container-fluid sponsors">
    <div class="container">
        <div class="col-sm-2 col-xs-6"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/cuany.jpg" alt="Cuany Electricité"/></div>
        <div class="col-sm-2 col-xs-6"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/coraline.jpg" alt="Institut de Beauté Coraline"/></div>
        <div class="col-sm-2 col-xs-6"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/loterie_romande.jpg" alt="La Loterie Romande"/></div>
        <div class="col-sm-2 col-xs-6"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/cardinal.jpg" alt="Cardinal Bières"/></div>
        <div class="col-sm-2 col-xs-6"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/developpement.jpg"alt="La société de développement de Delley Portalban Gletterens" /></div>
        <div class="col-sm-2 col-xs-6"><img src="<?php echo $this->getThemePath()?>/dist/img/sponsors/raiffesen.jpg" alt="raiffesen" /></div>
    </div>
</div>
<div class="container footer">
    <div class="col-sm-4 col-xs-12">
        <?php
        $a = new GlobalArea('Share Links');
        $a->display($c);
        ?>
    </div>
    <div class="col-sm-8 col-xs-12">
        <?php
        $a = new GlobalArea('Footer Nav');
        $a->display($c);
        ?>
    </div>
</div>