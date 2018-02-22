<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setHeaderTitle', 'translate' => 'title', 'module' => 'customer'), 'root', function ($block) { return $block->setHeaderTitle(Mage::helper('customer')->__('My Account')); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tag/customer_view', 'name' => 'customer_view', 'template' => 'tag/customer/view.phtml'), 'customer_view', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'customer_view');
$this->addItemRelation($item, 'my.account.wrapper');