<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'customer/address_edit', 'name' => 'customer_address_edit', 'template' => 'customer/address/edit.phtml'), 'customer_address_edit', 'content', array()), false);
$this->addItemRelation($item, 'customer_address_edit');
$this->addItemRelation($item, 'content');