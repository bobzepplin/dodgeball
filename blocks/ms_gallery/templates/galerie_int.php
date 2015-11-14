<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$html = Loader::helper('html');
$ih = Loader::helper('image');
$th = Loader::helper('text');

$c = Page::getCurrentPage();
if($css_composer){
	?>
	<script>
		$.ajax({
			url: '<?php  echo $css_composer; ?>',
			success: function(css) {
				css = '<style>' + css + '</style>';
				$('head').append(css);
			}
		});
    </script>
    <?php	
}
?>


<div class="ctn-gallery int <?= ($css_composer) ? ' composer' : NULL ; ?>">
	<h3>Gallerie d'images</h3>
<?php  foreach ($images as $img){
	$f = File::getByID($img['id']);
	$thumb = $ih->getThumbnail($f, 80, 80, true);
	$fancy = $ih->getThumbnail($f, 800, 1000, false);	
?>
	<div class="ctn_img_gallery">
		<div class="ctn_img">
		<a href="<?= $fancy->src ?>" class="fancy" rel="galerie" ><img src="<?= $thumb->src ?>" width="<?= $thumb->width ?>" height="<?= $thumb->height ?>" alt="<?= $img['title'] ?>" /></a>
		</div>
	</div>
<?php  } ?>
<div class="spacer" style="clear: both;"></div>
</div>

<?php 
if ($c->isEditMode()):
	$placeholder_id = "gallery_style_placeholder_{$controller->bID}";
	?>
	
	<div style="display: none;" id="<?php  echo $placeholder_id; ?>"></div>
	
	<script type="text/javascript">
	var gallery_has_style = false;
	$('.content').each(function(index, element) {

		if ($(this).css('float') == 'left') {
			gallery_has_style = true;
		}
		
		if (!gallery_has_style) {
			$.ajax({
				url: '<?php  echo $inline_view_css_url; ?>',
				success: function(css) {
					css = '<style>' + css + '</style>';
					$('#<?php  echo $placeholder_id; ?>').html(css);
				}
			});
		}

	});
	</script>

<?php  endif; ?>
