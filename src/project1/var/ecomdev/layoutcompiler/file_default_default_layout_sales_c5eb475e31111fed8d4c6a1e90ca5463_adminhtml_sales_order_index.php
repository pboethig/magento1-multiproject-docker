<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order', 'name' => 'sales_order.grid.container'), 'sales_order.grid.container', 'content', array()), false);
$this->addItemRelation($item, 'sales_order.grid.container');
$this->addItemRelation($item, 'content');