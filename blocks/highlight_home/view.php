<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
$lh = Loader::helper('section', 'multilingual');
$cl = substr($lh->getLanguage(),0,2);
    switch($cl){
    case 'de':
    setlocale (LC_TIME, 'de_DE');
      $plus = "Mehr Infos";
    break;
    default:
    setlocale (LC_TIME, 'fr_FR');
       $plus = "En savoir plus...";
  }
?>


<div class="highlight">
<div class="highlight-image">

<?php  if (!empty($field_2_image)&&!empty($field_5_link_cID)): 
$link_url = $nh->getLinkToCollection(Page::getByID($field_5_link_cID), true);
	$link_text = empty($field_5_link_text) ? $link_url : htmlentities($field_5_link_text, ENT_QUOTES, APP_CHARSET);?>
	<a href="<?php  echo $link_url; ?>"><img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" /></a>
<?php  endif; ?>
</div>
<div class="highlight-content">

<?php  if (!empty($field_4_textbox_text)): ?>
	<h3><?php  echo htmlentities($field_4_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
<?php  if (!empty($field_5_link_cID)):
	$link_url = $nh->getLinkToCollection(Page::getByID($field_5_link_cID), true);
	$link_text = empty($field_5_link_text) ? $link_url : htmlentities($field_5_link_text, ENT_QUOTES, APP_CHARSET);
	?>
	<a class="plus" href="<?php  echo $link_url; ?>"><?php  echo $link_text; ?></a>

<?php  endif; ?>
	</h3>
<?php  endif; ?>



<?php  if (!empty($field_7_textbox_text)): ?>
	<p><?php  echo htmlentities($field_7_textbox_text, ENT_QUOTES, APP_CHARSET); ?></p>
<?php  endif; ?>
<a class="more_info" href="<?php  echo $link_url; ?>"><?php echo $plus ?></a>
</div>
</div><!-- "end highlight" -->


