<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_shipping_method', 'template' => 'sales/order/create/abstract.phtml', 'name' => 'shipping_method'), 'shipping_method', 'content', array()), false);
$this->addItemRelation($item, 'shipping_method');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_shipping_method_form', 'template' => 'sales/order/create/shipping/method/form.phtml', 'name' => 'form'), 'form', 'shipping_method', array(0 => 'content')), false);
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'shipping_method');
$this->addItemRelation($item, 'content');