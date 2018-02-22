<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_status_assign', 'name' => 'sales_order_status.assign.container'), 'sales_order_status.assign.container', 'content', array()), false);
$this->addItemRelation($item, 'sales_order_status.assign.container');
$this->addItemRelation($item, 'content');