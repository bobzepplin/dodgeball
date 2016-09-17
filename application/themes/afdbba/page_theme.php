<?php
namespace Application\Theme\afdbba;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

	public function registerAssets() {
       $this->requireAsset('css', 'font-awesome');
	}

    public function getThemeEditorClasses()
    {
        return array(
            array('title' => t('Reverse Letter'), 'menuClass' => 'Reverse', 'spanClass' => 'reverse'),
            array('title' => t('BoutonG'), 'menuClass' => 'BoutonG', 'spanClass' => 'bouton big-btn hvr-sweep-to-top'),
            array('title' => t('Bouton'), 'menuClass' => 'Bouton', 'spanClass' => 'bouton hvr-sweep-to-top'),
            array('title' => t('NCcolor'), 'menuClass' => 'NCcolor', 'spanClass' => 'gold'),
            array('title' => t('Txtjustify'), 'menuClass' => 'Txtjustify', 'spanClass' => 'justify')
        );
    }

}


