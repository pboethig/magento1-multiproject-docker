<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_status_new', 'name' => 'sales_order_status.new.container'), 'sales_order_status.new.container', 'content', array()), false);
$this->addItemRelation($item, 'sales_order_status.new.container');
$this->addItemRelation($item, 'content');