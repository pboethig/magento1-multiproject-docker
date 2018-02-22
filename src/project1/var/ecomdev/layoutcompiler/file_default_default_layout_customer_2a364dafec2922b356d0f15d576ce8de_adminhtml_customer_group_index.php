<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/customer_group', 'name' => 'customer_group'), 'customer_group', 'content', array()), false);
$this->addItemRelation($item, 'customer_group');
$this->addItemRelation($item, 'content');