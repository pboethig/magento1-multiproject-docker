<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_load', 'name' => 'content'), 'content', 'root', array()), false);
$this->addItemRelation($item, 'content');
$this->addItemRelation($item, 'root');