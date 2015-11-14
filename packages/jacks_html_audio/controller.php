<?php     
 
defined('C5_EXECUTE') or die("Access Denied.");

class JacksHtmlAudioPackage extends Package {

	protected $pkgHandle = 'jacks_html_audio';
	protected $appVersionRequired = '5.4.0';
	protected $pkgVersion = '1.0.3';
	
	public function getPackageName() {
		return t("Html5 Music");
	}
	
	public function getPackageDescription() {
		return t("Allow for posting of Html5 Music.");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage("html_audio", $pkg);
	}

}