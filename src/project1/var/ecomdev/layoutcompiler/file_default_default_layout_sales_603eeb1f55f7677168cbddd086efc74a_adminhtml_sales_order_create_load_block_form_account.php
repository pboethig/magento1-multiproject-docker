<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'adminhtml/sales_order_create_form_account', 'template' => 'sales/order/create/form/account.phtml', 'name' => 'form_account'), 'form_account', 'content', array()), false);
$this->addItemRelation($item, 'form_account');
$this->addItemRelation($item, 'content');