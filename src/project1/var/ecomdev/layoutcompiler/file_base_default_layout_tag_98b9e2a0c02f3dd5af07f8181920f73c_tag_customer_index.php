<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('customer_account'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setHeaderTitle', 'translate' => 'title', 'module' => 'customer'), 'root', function ($block) { return $block->setHeaderTitle(Mage::helper('customer')->__('My Account')); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tag/customer_tags', 'name' => 'customer_tags', 'template' => 'tag/customer/tags.phtml'), 'customer_tags', 'my.account.wrapper', array()), false);
$this->addItemRelation($item, 'customer_tags');
$this->addItemRelation($item, 'my.account.wrapper');