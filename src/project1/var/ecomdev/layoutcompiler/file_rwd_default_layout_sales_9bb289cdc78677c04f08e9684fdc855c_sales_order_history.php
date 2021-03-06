<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_history', 'name' => 'sales.order.history'), 'sales.order.history', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'sales.order.history');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/text_list', 'name' => 'sales.order.history.info', 'as' => 'info', 'translate' => 'label'), 'sales.order.history.info', 'sales.order.history', array(0 => 'my.account.wrapper')), false);
$this->addItemRelation($item, 'sales.order.history.info');
$this->addItemRelation($item, 'sales.order.history');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'customer/account_dashboard', 'name' => 'customer.account.link.back', 'template' => 'customer/account/link/back.phtml'), 'customer.account.link.back', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'customer.account.link.back');
$this->addItemRelation($item, 'my.account.wrapper');