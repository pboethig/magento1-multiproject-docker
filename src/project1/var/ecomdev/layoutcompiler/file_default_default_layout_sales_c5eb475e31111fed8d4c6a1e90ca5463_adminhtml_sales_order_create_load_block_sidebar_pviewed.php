<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_sidebar_pviewed', 'template' => 'sales/order/create/sidebar/items.phtml', 'name' => 'sidebar_pviewed'), 'sidebar_pviewed', 'content', array()), false);
$this->addItemRelation($item, 'sidebar_pviewed');
$this->addItemRelation($item, 'content');