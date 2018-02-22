<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'payment/catalog_product_view_profile', 'name' => 'product.info.additional.recurring.schedule', 'as' => 'recurring_info', 'template' => 'payment/catalog/product/view/profile/schedule.phtml'), 'product.info.additional.recurring.schedule', 'product.info', array()), false);
$this->addItemRelation($item, 'product.info.additional.recurring.schedule');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addToParentGroup'), 'product.info.additional.recurring.schedule', function ($block) { return $block->addToParentGroup('detailed_info'); }, array(0 => 'product.info')), false);
$this->addItemRelation($item, 'product.info.additional.recurring.schedule');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTitle', 'translate' => 'value'), 'product.info.additional.recurring.schedule', function ($block) { return $block->setTitle(Mage::helper('core')->__('Recurring Profile')); }, array(0 => 'product.info')), false);
$this->addItemRelation($item, 'product.info.additional.recurring.schedule');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'payment/catalog_product_view_profile', 'name' => 'product.info.options.recurring', 'as' => 'recurring_options', 'template' => 'payment/catalog/product/view/profile/options.phtml'), 'product.info.options.recurring', 'product.info.options.wrapper', array()), false);
$this->addItemRelation($item, 'product.info.options.recurring');
$this->addItemRelation($item, 'product.info.options.wrapper');