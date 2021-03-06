<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar', 'template' => 'sales/order/create/sidebar.phtml', 'name' => 'sidebar'), 'sidebar', 'content', array()), false);
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_cart', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'cart'), 'cart', 'sidebar', array(0 => 'content')), false);
$this->addItemRelation($item, 'cart');
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_wishlist', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'wishlist'), 'wishlist', 'sidebar', array(0 => 'content')), false);
$this->addItemRelation($item, 'wishlist');
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_reorder', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'reorder'), 'reorder', 'sidebar', array(0 => 'content')), false);
$this->addItemRelation($item, 'reorder');
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_viewed', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'viewed'), 'viewed', 'sidebar', array(0 => 'content')), false);
$this->addItemRelation($item, 'viewed');
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_compared', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'compared'), 'compared', 'sidebar', array(0 => 'content')), false);
$this->addItemRelation($item, 'compared');
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_pcompared', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'pcompared'), 'pcompared', 'sidebar', array(0 => 'content')), false);
$this->addItemRelation($item, 'pcompared');
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_pviewed', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'pviewed'), 'pviewed', 'sidebar', array(0 => 'content')), false);
$this->addItemRelation($item, 'pviewed');
$this->addItemRelation($item, 'sidebar');
$this->addItemRelation($item, 'content');