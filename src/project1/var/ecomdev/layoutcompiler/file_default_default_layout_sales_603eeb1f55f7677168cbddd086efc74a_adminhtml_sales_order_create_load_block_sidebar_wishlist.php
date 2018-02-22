<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_wishlist', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'sidebar_wishlist'), 'sidebar_wishlist', 'content', array()), false);
$this->addItemRelation($item, 'sidebar_wishlist');
$this->addItemRelation($item, 'content');