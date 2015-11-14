<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$rssUrl = $showRss ? $controller->getRssUrl($b) : '';
$th = Loader::helper('text');
$ih = Loader::helper('image'); 
//Note that $nh (navigation helper) is already loaded for us by the controller (for legacy reasons)
$user = new User();
$Admin_group = Group::getByName('Administrators');
$newevent =$newevent = $this->url('/dashboard/composer/write/6/');
if($user->inGroup($Admin_group)) {
?>
	<script language="javascript">    
    DelItem = function(id) {
       jQuery.fn.dialog.open({
          title: 'Supprimer l événement',
          href: CCM_BASE_URL + CCM_REL + CCM_TOOLS_PATH + '/edit_collection_popup.php?cID='+ id + '&ctask=delete',
          width: 360,
          modal: false,
          height: 180,
          onClose: function() {
             document.location.reload();
          }
       });
       return false;
    }
    </script>
<?php } 
?>

	<?php  foreach ($pages as $page):

		// Prepare data for each page being listed...
		$title = $th->entities($page->getCollectionName());
		$url = $nh->getLinkToCollection($page);
		$target = ($page->getCollectionPointerExternalLink() != '' && $page->openCollectionPointerExternalLinkInNewWindow()) ? '_blank' : $page->getAttribute('nav_target');
		$target = empty($target) ? '_self' : $target;
		$description = $page->getCollectionDescription();
		$description = $controller->truncateSummaries ? $th->shorten($description, $controller->truncateChars) : $description;
		$description = $th->entities($description);
		$date = date('d.m.Y', strtotime($page->getCollectionDatePublic()));
		$ownerID = $page->getCollectionUserID(); //gets the User ID of the Page Owner
		$ui = UserInfo::getByID($ownerID); //with the User ID, load a UserInfo object
		$ownerName = $ui->getUserName(); //get the username of the page owner

		$defimg = 599;
		$img = $page->getAttribute('thumbnail');
		if($img != File::getByID($defimg) && $img > 0){
			$img = $img;
		}elseif($getimg != NULL){
			$img = File::getByID($getimg);
		}else{
			$img = File::getByID($defimg);
		}
		$thumb = $ih->getThumbnail($img, 150, 120, true);

		
		//Other useful page data...
		//$date = date('F j, Y', strtotime($page->getCollectionDatePublic()));
		//$last_edited_by = $page->getVersionObject()->getVersionAuthorUserName();
		//$original_author = Page::getByID($page->getCollectionID(), 1)->getVersionObject()->getVersionAuthorUserName();
		
		/* CUSTOM ATTRIBUTE EXAMPLES:
		 * $example_value = $page->getAttribute('example_attribute_handle');
		 *
		 * HOW TO USE IMAGE ATTRIBUTES:
		 * 1) Uncomment the "$ih = Loader::helper('image');" line up top.
		 * 2) Put in some code here like the following 2 lines:
		 *      $img = $page->getAttribute('example_image_attribute_handle');
		 *      $thumb = $ih->getThumbnail($img, 64, 9999, false);
		 *    (Replace "64" with max width, "9999" with max height. The "9999" effectively means "no maximum size" for that particular dimension.)
		 *    (Change the last argument from false to true if you want thumbnails cropped.)
		 * 3) Output the image tag below like this:
		 *		<img src="<?php  echo $thumb->src ?>" width="<?php  echo $thumb->width ?>" height="<?php  echo $thumb->height ?>" alt="" />
		 *
		 * ~OR~ IF YOU DO NOT WANT IMAGES TO BE RESIZED:
		 * 1) Put in some code here like the following 2 lines:
		 * 	    $img_src = $img->getRelativePath();
		 * 	    list($img_width, $img_height) = getimagesize($img->getPath());
		 * 2) Output the image tag below like this:
		 * 	    <img src="<?php  echo $img_src ?>" width="<?php  echo $img_width ?>" height="<?php  echo $img_height ?>" alt="" />
		 */
		
		/* End data preparation. */

		/* The HTML from here through "endforeach" is repeated for every item in the list... */ ?>

		<div class="in_actu">
			<div class="left_in_actu">
				<img src="<?php  echo $thumb->src ?>" width="<?php  echo $thumb->width ?>" height="<?php  echo $thumb->height ?>" alt="" />
			</div>
			<div class="right_in_actu">
				<h3><?php  echo $title ?></h3>
				<p class="date">Actualité publiée le: <?= $date ?> par <?= $ownerName ?></p>
				 <hr />
				<p><?php  echo $description ?><a class="more_infos" href="<?php  echo $url ?>">En savoir plus...</a></p>
				<div class="spacer" style="clear:both;"></div>
			</div>
			<div class="spacer" style="clear:both;"></div>
        </div><!-- "end actu" -->
        <div class="ccm-spacer"></div>
		<?php if($user->inGroup($Admin_group)) {
	                	$edit_url = $this->url('dashboard/composer/write/-/edit/'.$page->getCollectionID());
						$dele_url = $this->url('tools/required/edit_collection_popup.php?cID='.$page->getCollectionID().'&ctask=delete');
	                    echo '<div class="user_edit">';
						echo '<a href="'.$edit_url.'" class="edit_bt" ></a>'.' ';
						echo '<a href="'.$dele_url.'" class="delete_bt" onclick="return DelItem('.$page->getCollectionID().')"></a>';
						echo '<a href="'.$newevent.'" class="new_bt"'.')"></a>';
						echo '<div class="ccm-spacer"></div></div>';
	                }
	            ?>
	<?php  endforeach; ?>
 

	<?php  if ($showRss): ?>
		<div class="ccm-page-list-rss-icon">
			<a href="<?php  echo $rssUrl ?>" target="_blank"><img src="<?php  echo $rssIconSrc ?>" width="14" height="14" alt="<?php  echo t('RSS Icon') ?>" title="<?php  echo t('RSS Feed') ?>" /></a>
		</div>
		<link href="<?php  echo BASE_URL.$rssUrl ?>" rel="alternate" type="application/rss+xml" title="<?php  echo $rssTitle; ?>" />
	<?php  endif; ?>
 



<?php  if ($showPagination): ?>
	<div id="pagination">
		<div class="ccm-spacer"></div>
		<div class="ccm-pagination">
			<span class="ccm-page-left"><?php  echo $paginator->getPrevious('&laquo; ' . t('Previous')) ?></span>
			<?php  echo $paginator->getPages() ?>
			<span class="ccm-page-right"><?php  echo $paginator->getNext(t('Next') . ' &raquo;') ?></span>
		</div>
	</div>
<?php  endif; ?>