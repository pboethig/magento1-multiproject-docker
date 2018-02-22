<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/onepage_success', 'name' => 'checkout.success', 'template' => 'checkout/success.phtml'), 'checkout.success', 'content', array()), false);
$this->addItemRelation($item, 'checkout.success');
$this->addItemRelation($item, 'content');