<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'wishlist/share_wishlist', 'name' => 'customer.wishlist', 'template' => 'wishlist/shared.phtml'), 'customer.wishlist', 'content', array()), false);
$this->addItemRelation($item, 'customer.wishlist');
$this->addItemRelation($item, 'content');