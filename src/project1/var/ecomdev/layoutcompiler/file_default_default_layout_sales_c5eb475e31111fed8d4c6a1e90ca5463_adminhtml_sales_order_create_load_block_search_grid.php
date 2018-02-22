<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_search_grid', 'name' => 'grid'), 'grid', 'content', array()), false);
$this->addItemRelation($item, 'grid');
$this->addItemRelation($item, 'content');