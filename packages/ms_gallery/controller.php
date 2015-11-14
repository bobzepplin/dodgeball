<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class MsGalleryPackage extends Package {

	protected $pkgHandle = 'ms_gallery';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '1.0'; 
	
	public function getPackageName() {
		return t("Galerie"); 
	}	
	
	public function getPackageDescription() {
		return t("Affiche les images d'une collection sous forme de galerie.");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block
		BlockType::installBlockTypeFromPackage('ms_gallery', $pkg);
	}
	
	public function uninstall() {
		parent::uninstall();
		$db = Loader::db();
		$db->Execute('DROP TABLE btMsGallery, btMsGalleryPositions');
	}


}