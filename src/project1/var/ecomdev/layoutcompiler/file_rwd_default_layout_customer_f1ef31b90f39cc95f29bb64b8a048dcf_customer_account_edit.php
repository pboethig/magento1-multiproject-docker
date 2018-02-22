<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setHeaderTitle', 'translate' => 'title', 'module' => 'customer'), 'root', function ($block) { return $block->setHeaderTitle(Mage::helper('customer')->__('Edit Account Info')); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'customer/form_edit', 'name' => 'customer_edit', 'template' => 'customer/form/edit.phtml'), 'customer_edit', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'customer_edit');
$this->addItemRelation($item, 'my.account.wrapper');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'unsetChild'), 'left', function ($block) { return $block->unsetChild('left.permanent.callout'); }, array()), false);
$this->addItemRelation($item, 'left');