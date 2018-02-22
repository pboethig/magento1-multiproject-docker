<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'wishlist/customer_sharing', 'name' => 'wishlist.sharing', 'template' => 'wishlist/sharing.phtml'), 'wishlist.sharing', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'wishlist.sharing');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'unsetChild'), 'right', function ($block) { return $block->unsetChild('wishlist_customer_sidebar'); }, array()), false);
$this->addItemRelation($item, 'right');