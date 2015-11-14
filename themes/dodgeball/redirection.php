<?php
	defined('C5_EXECUTE') or die(_("Access Denied."));
	$nh = Loader::helper('navigation');
	$subPage = $c->getFirstChild();
	  if ($subPage instanceof Page) {
		 $pageLink = $nh->getLinkToCollection($subPage);
		 header('Status: 301 Moved Permanently', false, 301);   
		 header("Location: $pageLink");
		 exit;
	  }