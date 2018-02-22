<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_shipping_address', 'template' => 'sales/order/create/form/address.phtml', 'name' => 'shipping_address'), 'shipping_address', 'content', array()), false);
$this->addItemRelation($item, 'shipping_address');
$this->addItemRelation($item, 'content');