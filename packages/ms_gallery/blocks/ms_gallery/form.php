<style>
	#dragndropInstructions { display: inline; padding-left: 5px; font-style: italic; }
	#thumbnailsContainer { width: 785px; height: 330px; margin-top: 5px; border: 1px solid black; background: url(<?php  echo $this->getBlockURL(); ?>/images/crosshatch.png) repeat left top; }
	#thumbnailLoadingIndicator { position: absolute; top: 155px; left: 125px; z-index: 1; }
	#sortableThumbnails { list-style-type: none; margin: 0; padding: 0; }
	#sortableThumbnails li { margin: 5px; padding: 0; float: left; cursor: move; width: 60px; height: 60px; text-align: center; }
	#sortableThumbnails .thumbnail_title { font-size: 8px; }
	#galleryOptions label { display: inline; }
	#galleryOptions input { width: 25px; }
	.galleryOptionField { display: inline; margin-right: 15px; }
</style>

<strong>Collection</strong>
<select id="fsID" name="fsID">
	<option value="0">Chargement...</option>
</select>
<span id="dragndropInstructions" style="display: none;">Réorganisez les images par glisser-déplacer.</span>

<div id="thumbnailsContainer">
	<ul id="sortableThumbnails"></ul>
</div>

<img id="thumbnailLoadingIndicator" style="display: none;" src="<?php  echo $this->getBlockURL(); ?>/images/spinner.gif" width="32" height="32" alt="Chargement..." />

<input type="hidden" id="sortedFileIDs" name="sortedFileIDs" value="" />

<script>
var SG_GET_FILESETS_URL = '<?php  echo $get_filesets_url; ?>';
var SG_GET_THUMBNAILS_URL = '<?php  echo $get_thumbnails_url; ?>';
var SG_BLOCK_ID = '<?php  echo $this->controller->bID; ?>';

refreshFilesetList(<?php  echo $fsID; ?>);
displayThumbnails(<?php  echo $fsID; ?>);
</script>
