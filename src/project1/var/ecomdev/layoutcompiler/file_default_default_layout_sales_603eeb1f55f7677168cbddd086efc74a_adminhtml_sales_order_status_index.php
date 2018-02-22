<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_status', 'name' => 'sales_order_status.grid.container'), 'sales_order_status.grid.container', 'content', array()), false);
$this->addItemRelation($item, 'sales_order_status.grid.container');
$this->addItemRelation($item, 'content');