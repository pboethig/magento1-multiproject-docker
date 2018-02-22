<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Include('popup'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('overlay_popup.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');