<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'review/product_view_list', 'name' => 'product.reviews', 'as' => 'reviews', 'template' => 'review/product/view/list.phtml', 'after' => 'additional'), 'product.reviews', 'product.info', array()), false);
$this->addItemRelation($item, 'product.reviews');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addToParentGroup'), 'product.reviews', function ($block) { return $block->addToParentGroup('detailed_info'); }, array(0 => 'product.info')), false);
$this->addItemRelation($item, 'product.reviews');
$this->addItemRelation($item, 'product.info');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTitle', 'translate' => 'value'), 'product.reviews', function ($block) { return $block->setTitle(Mage::helper('core')->__('Reviews')); }, array(0 => 'product.info')), false);
$this->addItemRelation($item, 'product.reviews');
$this->addItemRelation($item, 'product.info');