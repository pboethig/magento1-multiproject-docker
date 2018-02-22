<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'unsetChild'), 'customer_account_dashboard', function ($block) { return $block->unsetChild('customer_account_dashboard_info2'); }, array()), false);
$this->addItemRelation($item, 'customer_account_dashboard');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tag/customer_recent', 'name' => 'customer_account_dashboard_info2', 'as' => 'info2', 'template' => 'tag/customer/recent.phtml'), 'customer_account_dashboard_info2', 'customer_account_dashboard', array()), false);
$this->addItemRelation($item, 'customer_account_dashboard_info2');
$this->addItemRelation($item, 'customer_account_dashboard');