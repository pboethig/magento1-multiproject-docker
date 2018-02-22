<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_viewed', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'sidebar_viewed'), 'sidebar_viewed', 'content', array()), false);
$this->addItemRelation($item, 'sidebar_viewed');
$this->addItemRelation($item, 'content');