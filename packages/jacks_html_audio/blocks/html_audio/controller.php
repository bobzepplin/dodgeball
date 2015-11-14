<?php   
	Loader::block('library_file');
	defined('C5_EXECUTE') or die("Access Denied.");	
	class HtmlAudioBlockController extends BlockController {

		protected $btInterfaceWidth = 400;
		protected $btInterfaceHeight = 300;
		protected $btTable = 'btHtmlAudio';
		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Adds an html5 Audio block.");
		}
		
		public function getBlockTypeName() {
			return t("Html5 Audio");
		}		
		function getFileID() {return $this->fID;}
		function getFileoggID() {return $this->foggID;}
		function getFileoggObject() {
			return File::getByID($this->foggID);
		}
		function getFileObject() {
			return File::getByID($this->fID);
		}
		public function save($args) {		
			$args['fID'] = ($args['fID'] != '') ? $args['fID'] : 0;
			$args['foggId'] = ($args['fIDogg'] != '') ? $args['fIDogg'] : 0;
			parent::save($args);
		}
		public function validate($args) {
			$e = Loader::helper('validation/error');
			if ($args['fID'] < 1) {
				$e->add(t('You must select a music file with a .mp3 extension.'));
			}
			if ($args['foggID'] < 1) {
				$e->add(t('You must select a music file with a .ogg extension.'));
			}
			return $e;
		}

	}

?>