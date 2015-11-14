<?php     
defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
?>
<div class="ccm-block-field-group">
<h2><?php   echo t('MP3 Audio')?></h2>
<?php   echo $al->file('cm-b-mp3', 'fID', t('Choose Video'), $bf);?>
<p><?php   echo t('Choose a file with a .mp3 extension');?></p>
</div>
<div class="ccm-block-field-group">
<h2><?php   echo t('Ogg Audio')?></h2>
<?php   echo $al->file('ccm-b-ogg', 'foggID', t('Choose ogg Video'), $bf0);?>
<p><?php   echo t('Choose a file with a .ogg extension');?></p>
</div>
