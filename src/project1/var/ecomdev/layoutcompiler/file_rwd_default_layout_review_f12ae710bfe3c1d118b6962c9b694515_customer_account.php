<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLink', 'translate' => 'label', 'module' => 'review'), 'customer_account_navigation', function ($block) { return $block->addLink('reviews', 'review/customer', Mage::helper('review')->__('My Product Reviews')); }, array()), false);
$this->addItemRelation($item, 'customer_account_navigation');