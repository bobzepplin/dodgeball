<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$html = Loader::helper('html');
$ih = Loader::helper('image');
$fv = Loader::helper('file');
$c = Page::getCurrentPage();
$lh = Loader::helper('section', 'multilingual');
$cl = substr($lh->getLanguage(),0,2);
    switch($cl){
    case 'de':
    setlocale (LC_TIME, 'de_DE');
      $dev_spon = "Sponsor werden?";
      $link ="/startseite/helfen-sie-uns/sponsoring";
    break;
    default:
    setlocale (LC_TIME, 'fr_FR');
       $dev_spon = "Devenir Sponsor ?";
       $link ="/fr/nous-aider/sponsoring";
  }
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
                                  

<div class="ctn-gallery <?= ($css_composer) ? ' composer' : NULL ; ?>">

<?php
	shuffle($images);  
	foreach ($images as $img){             
	$f = File::getByID($img['id']);              
	$thumb = $ih->getThumbnail($f, 100, 70, false);
	$lien_association = $f->getAttribute('lien_association');

                                 
?>
	
	<a  href="http://<?php echo $lien_association ?>" target="_blank"><img height="<?= $thumb->height ?>" width="<?= $thumb->width ?>" src="<?= $thumb->src ?>" alt="<?= $img['title'] ?>"></a>
<?php  } ?>
</div>
<a class="become_sponsor" href="<?php echo DIR_REL?><?php echo $link ?>"><?php echo $dev_spon ?></a>

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
