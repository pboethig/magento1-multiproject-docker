<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_status_edit', 'name' => 'sales_order_status.edit.container'), 'sales_order_status.edit.container', 'content', array()), false);
$this->addItemRelation($item, 'sales_order_status.edit.container');
$this->addItemRelation($item, 'content');