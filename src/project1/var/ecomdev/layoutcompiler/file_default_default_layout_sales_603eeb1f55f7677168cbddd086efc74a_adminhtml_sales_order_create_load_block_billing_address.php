<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_billing_address', 'template' => 'sales/order/create/form/address.phtml', 'name' => 'billing_address'), 'billing_address', 'content', array()), false);
$this->addItemRelation($item, 'billing_address');
$this->addItemRelation($item, 'content');