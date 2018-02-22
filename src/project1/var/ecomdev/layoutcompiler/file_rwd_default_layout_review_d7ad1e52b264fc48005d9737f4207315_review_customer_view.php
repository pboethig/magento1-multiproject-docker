<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'review/customer_view', 'name' => 'customers_review'), 'customers_review', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'customers_review');
$this->addItemRelation($item, 'my.account.wrapper');