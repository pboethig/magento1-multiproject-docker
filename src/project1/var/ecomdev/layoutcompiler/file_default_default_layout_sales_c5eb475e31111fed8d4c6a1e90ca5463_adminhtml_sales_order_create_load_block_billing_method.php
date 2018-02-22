<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_billing_method', 'template' => 'sales/order/create/abstract.phtml', 'name' => 'billing_method'), 'billing_method', 'content', array()), false);
$this->addItemRelation($item, 'billing_method');
$this->addItemRelation($item, 'content');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_billing_method_form', 'template' => 'sales/order/create/billing/method/form.phtml', 'name' => 'form'), 'form', 'billing_method', array(0 => 'content')), false);
$this->addItemRelation($item, 'form');
$this->addItemRelation($item, 'billing_method');
$this->addItemRelation($item, 'content');