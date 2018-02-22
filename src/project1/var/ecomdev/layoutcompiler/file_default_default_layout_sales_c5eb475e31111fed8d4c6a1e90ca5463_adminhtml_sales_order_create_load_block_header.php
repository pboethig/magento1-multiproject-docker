<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_header', 'name' => 'header'), 'header', 'content', array()), false);
$this->addItemRelation($item, 'header');
$this->addItemRelation($item, 'content');