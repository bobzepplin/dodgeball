<?php    
defined('C5_EXECUTE') or die("Access Denied.");
	$al = Loader::helper('concrete/asset_library');
$bf = null;
$bfO = null;
if ($controller->getFileID() > 0) { 
	$bf = $controller->getFileObject();
}
if ($controller->getFileoggID() > 0) { 
	$bfO = $controller->getFileoggObject();

}
?>
<div class="ccm-block-field-group">
<h2><?php   echo t('H.264 Video')?></h2>
<?php   echo $al->file('cm-b-mp3', 'fID', t('Choose Video'), $bf);?>
<p><?php   echo t('Choose a file with a .mp3 extension');?></p>
</div>
<div class="ccm-block-field-group">
<h2><?php   echo t('Ogg/Theora Video')?></h2>
<?php   echo $al->file('ccm-b-ogg', 'foggID', t('Choose ogg Video'), $bf0);?>
<p><?php   echo t('Choose a file with a .ogg extension');?></p>
</div>
<table border="0" cellspacing="0" cellpadding="10">
<tr>
<td><?php   echo t('Width')?></td>
<td><?php   echo t('Height')?></td>
</tr><tr>
<td><?php   echo  $form->text('width', intval($width), array('style' => 'width: 40px')); ?></td>
<td><?php   echo  $form->text('height', intval($height), array('style' => 'width: 40px')); ?></td>
</tr>
</table>

</div>