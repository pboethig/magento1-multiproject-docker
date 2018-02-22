<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_search', 'template' => 'sales/order/create/abstract.phtml', 'name' => 'search'), 'search', 'content', array()), false);
$this->addItemRelation($item, 'search');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_search_grid', 'name' => 'grid'), 'grid', 'search', array(0 => 'content')), false);
$this->addItemRelation($item, 'grid');
$this->addItemRelation($item, 'search');
$this->addItemRelation($item, 'content');