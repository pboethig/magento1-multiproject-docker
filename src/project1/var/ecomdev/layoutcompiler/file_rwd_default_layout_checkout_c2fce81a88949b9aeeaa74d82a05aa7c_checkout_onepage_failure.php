<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/2columns-right.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/onepage_failure', 'name' => 'checkout.failure', 'template' => 'checkout/onepage/failure.phtml'), 'checkout.failure', 'content', array()), false);
$this->addItemRelation($item, 'checkout.failure');
$this->addItemRelation($item, 'content');