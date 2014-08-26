<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	$aBlocks = $controller->generateNav();
	$c = Page::getCurrentPage();
	
	$nh = Loader::helper('navigation');
	
	//this will create an array of parent cIDs 
	$inspectC=$c;
	$selectedPathCIDs=array( $inspectC->getCollectionID() );
	$parentCIDnotZero=true;	
	while($parentCIDnotZero){
		$cParentID=$inspectC->cParentID;
		if(!intval($cParentID)){
			$parentCIDnotZero=false;
		}else{
			$selectedPathCIDs[]=$cParentID;
			$inspectC=Page::getById($cParentID);
		}
	}
	
	// Block settings
	$displaySubPages	= $controller->displaySubPages == 'none' ? false : $controller->displaySubPages;
	
	echo '<ul class="right">';
	
		foreach($aBlocks as $ni) {
			
			$_c	= $ni->getCollectionObject();
			
			$numChildren = $ni->getCollectionID();
			
			$children = $_c->getCollectionChildrenArray();
			
			// We need to count the number of child pages that are actually public (ignore the home page)
			$publicChildrenCount = 0;
			
			if ($_c->getCollectionID() != HOME_CID) {
				foreach ($children as $cID) {
					$page = Page::getByID($cID);
					if (!$page->getAttribute('exclude_nav')) {
						$publicChildrenCount++;
					}
				}
			}
			
			if (!$_c->getCollectionAttributeValue('exclude_nav')) {

				$target = $ni->getTarget();
				if (!empty($target)) { $target = 'target="'. $target .'"';}

				$thisLevel		= $ni->getLevel();
				$hasChildren	= $publicChildrenCount > 0 ? true : false;
				
				$topLevel			= false;
				$child				= false;
				$topLevelParent		= false;
				$topLevelNonParent	= false;
				
				if ($thisLevel > 0)						{ $child = true;}
				if ($thisLevel == 0)					{ $topLevel = true;}
				if (!$hasChildren && $thisLevel == 0)	{ $topLevelNonParent = true;}
				if ($hasChildren && $thisLevel == 0)	{ $topLevelParent = true;}

				// Get page link
				$pageLink = false;

				if ($_c->getCollectionAttributeValue('replace_link_with_first_in_nav')) {
					$subPage = $_c->getFirstChild();
					if ($subPage instanceof Page) {
						$pageLink = $nh->getLinkToCollection($subPage);
					}
				}

				if (!$pageLink) { $pageLink = $ni->getURL();}

				// Generate html
				
				// Close 2nd level <ul> if Top Level item precedes a 2nd level item (also reset child count)
				if ($topLevel && $childCount > 0)	{ echo '</ul>'; $childCount = 0;}
				
				$activeClass = '';
				if ($c->getCollectionID() == $_c->getCollectionID()) { $activeClass = 'active';}
				elseif (in_array($_c->getCollectionID(), $selectedPathCIDs) && ($_c->getCollectionID() != HOME_CID)) { $activeClass = 'active moved';}
				
				if ($topLevelParent && $childCount == 0 && $displaySubPages != false)	{ echo '<li class="has-dropdown '. $activeClass .'">';}
				else if ($topLevel && $childCount == 0)									{ echo '<li class="'. $activeClass .'">';}
				
				// Open 2nd level <ul>
				if ($child && $childCount == 0) { echo '<ul class="dropdown">';}
				
				// Open 2nd level <li>
				if ($child) { echo '<li class="'. $activeClass .'">';}
				
				echo '<a href="'. $pageLink .'" '. $target .'>'. $ni->getName() .'</a>';
				
				// Close 2nd level <li>
				if ($child) { echo '</li>'; $childCount++;}
				
				if ($topLevel && $childCount > 0) { echo '</li>';}
				
				if ($topLevelNonParent)			{ echo '</li>';}
				

				//print('<pre>'.print_r($ni,true).'</pre>');

			}
		}
	
	echo '</ul>';