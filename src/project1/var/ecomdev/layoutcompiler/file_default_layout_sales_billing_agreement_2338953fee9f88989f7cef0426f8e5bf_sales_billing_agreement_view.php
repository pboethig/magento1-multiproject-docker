<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/2columns-left.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/billing_agreement_view', 'name' => 'customer.account.billing.agreement', 'template' => 'sales/billing/agreement/view.phtml'), 'customer.account.billing.agreement', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'customer.account.billing.agreement');
$this->addItemRelation($item, 'my.account.wrapper');