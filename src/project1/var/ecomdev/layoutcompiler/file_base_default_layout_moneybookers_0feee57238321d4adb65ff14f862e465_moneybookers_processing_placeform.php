<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('moneybookers/blank.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'moneybookers/placeform', 'name' => 'moneybookers_placeform', 'template' => 'moneybookers/placeform.phtml'), 'moneybookers_placeform', 'content', array()), false);
$this->addItemRelation($item, 'moneybookers_placeform');
$this->addItemRelation($item, 'content');