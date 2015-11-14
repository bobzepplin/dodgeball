<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$navItems = $controller->getNavItems(true);
?>
<div class="breadcrump-page">
<?php
for ($i = 1; $i < count($navItems); $i++) {
	$ni = $navItems[$i];
	if ($i > 1) {
		echo ' <span class="breadcrumb-sep">&gt;</span> ';
	}
	
	if ($ni->isCurrent) {
		echo $ni->name;
	} else {
		echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
	}
}
?>
</div>
