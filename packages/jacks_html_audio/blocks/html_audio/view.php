<?php    
defined('C5_EXECUTE') or die("Access Denied.");
$p = Page::getCurrentPage();
if ($p->isEditMode()) { ?>
	<div class="ccm-edit-mode-disabled-item">
		<div style="padding:8px 0px; padding-top:10px;"><?php    echo t('Music disabled in edit mode.')?></div>
	</div>
<?php     }else{
			$f = $controller->getFileObject();
			$relPath = $f->getRelativePath();
			$fogg = $controller->getFileoggObject();
			$relPathogg = $fogg->getRelativePath();			
?>
<audio controls="">
  <source src="<?php    echo $relPath;?>" type="audio/mpeg">
  <source src="<?php    echo $relPathogg;?>" type="audio/ogg">
  <?php    echo t('Your Browser doesn\'t support the html5 Music element.');?>
</audio>
<?php    } ?>