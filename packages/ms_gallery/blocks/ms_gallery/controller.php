<?php 
	defined('C5_EXECUTE') or die(_("Access Denied."));

	class MsGalleryBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Affiche les images d'une collection sous forme de galerie.";
		protected $btName = "Galerie";
		protected $btTable = 'btMsGallery';
		protected $btInterfaceWidth = "800";
		protected $btInterfaceHeight = "480";

		public function on_page_view() {
			$html = Loader::helper('html');				
			$bv = new BlockView();
			$bv->setBlockObject($this->getBlockObject());
		}
		
		public function view() {
			Loader::model('ms_gallery', 'ms_gallery');
			$sg = new MsGallery($this->bID);
			$files = $sg->getPermittedImages();

			$ih = Loader::helper('image');

			$images = array();
			foreach ($files as $file) {
				$image = array();			
				$fv = $file->getRecentVersion();
				$image['title'] = htmlspecialchars($fv->getTitle(), ENT_QUOTES, 'UTF-8');
				$image['description'] = htmlspecialchars($fv->getDescription(), ENT_QUOTES, 'UTF-8');
				$image['website'] = $file->getAttribute('website');
				$image['id'] = $file->getFileID();				
				$images[] = $image;
			}

			$this->set('images', $images);
			
			$html = Loader::helper('html');				
			$bv = new BlockView();
			$bv->setBlockObject($this->getBlockObject());
			$css_output_object = $html->css($bv->getBlockURL() . '/view.css');
			$this->set('inline_view_css_url', $css_output_object->file);
		}
		
		public function composer() {
			$this->view();
			$html = Loader::helper('html');				
			$bv = new BlockView();
			$bv->setBlockObject($this->getBlockObject());
			$css_composer = $html->css($bv->getBlockURL() . '/view_composer.css');
			$this->set('css_composer', $css_composer->file);
		}
		
		function add() {
			$this->set('fsID', 0);
			$this->set_tools_urls();
		}
		
		function edit() {
			$this->set_tools_urls();
		}
		
		private function set_tools_urls() {
			$th = Loader::helper('concrete/urls'); 
			$this->set('get_filesets_url', $th->getToolsURL('get_fileset_select_options', 'ms_gallery'));
			$this->set('get_thumbnails_url', $th->getToolsURL('get_thumbnail_items', 'ms_gallery'));
		}			
		
		public function save($args) {
			parent::save($args);
			Loader::model('ms_gallery', 'ms_gallery');
			$sg = new MsGallery($this->bID);
			$sortedFileIDs = empty($args['sortedFileIDs']) ? array() : explode(',', $args['sortedFileIDs']);
			$sg->setPositions($sortedFileIDs);
		}
		
	}

?>
