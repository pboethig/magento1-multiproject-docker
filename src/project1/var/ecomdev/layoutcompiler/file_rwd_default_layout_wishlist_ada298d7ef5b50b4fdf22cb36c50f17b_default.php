<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'wishlist/links', 'name' => 'wishlist_link'), 'wishlist_link', 'top.links', array()), false);
$this->addItemRelation($item, 'wishlist_link');
$this->addItemRelation($item, 'top.links');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLinkBlock'), 'top.links', function ($block) { return $block->addLinkBlock('wishlist_link'); }, array()), false);
$this->addItemRelation($item, 'top.links');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'wishlist/customer_sidebar', 'name' => 'wishlist_sidebar', 'as' => 'wishlist', 'after' => 'cart_sidebar', 'template' => 'wishlist/sidebar.phtml'), 'wishlist_sidebar', 'right', array()), false);
$this->addItemRelation($item, 'wishlist_sidebar');
$this->addItemRelation($item, 'right');