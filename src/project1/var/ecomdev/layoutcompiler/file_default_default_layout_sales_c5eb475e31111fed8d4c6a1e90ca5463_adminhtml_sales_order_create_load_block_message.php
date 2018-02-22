<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_messages', 'name' => 'message'), 'message', 'content', array()), false);
$this->addItemRelation($item, 'message');
$this->addItemRelation($item, 'content');