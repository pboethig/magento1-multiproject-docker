<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'review/customer_list', 'name' => 'review_customer_list', 'template' => 'review/customer/list.phtml'), 'review_customer_list', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'review_customer_list');
$this->addItemRelation($item, 'my.account.wrapper');