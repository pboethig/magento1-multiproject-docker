<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'moneybookers/payment', 'name' => 'moneybookers_payment', 'template' => 'moneybookers/payment.phtml'), 'moneybookers_payment', 'content', array()), false);
$this->addItemRelation($item, 'moneybookers_payment');
$this->addItemRelation($item, 'content');