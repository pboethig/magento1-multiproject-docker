<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('default'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('header'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('menu'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('popup.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');