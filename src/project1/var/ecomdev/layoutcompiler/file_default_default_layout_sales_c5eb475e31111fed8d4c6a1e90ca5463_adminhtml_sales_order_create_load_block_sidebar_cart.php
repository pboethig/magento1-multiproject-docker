<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_cart', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'sidebar_cart'), 'sidebar_cart', 'content', array()), false);
$this->addItemRelation($item, 'sidebar_cart');
$this->addItemRelation($item, 'content');