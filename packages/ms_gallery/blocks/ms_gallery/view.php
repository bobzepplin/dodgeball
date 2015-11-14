<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$html = Loader::helper('html');
$ih = Loader::helper('image');
$c = Page::getCurrentPage();
?>

<ul>
<?php  foreach ($images as $img){
	$f = File::getByID($img['id']);
	$thumb = $ih->getThumbnail($f, 960, 290, true);
?>
	<li><img src="<?= $thumb->src ?>" width="<?= $thumb->width ?>" height="<?= $thumb->height ?>" alt="<?= $img['title'] ?>" /></li>
<?php  } ?>
</ul>

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