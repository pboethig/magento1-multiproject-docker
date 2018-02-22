<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/popup.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'shipping/tracking_popup', 'name' => 'shipping.tracking.popup', 'template' => 'shipping/tracking/popup.phtml'), 'shipping.tracking.popup', 'content', array()), false);
$this->addItemRelation($item, 'shipping.tracking.popup');
$this->addItemRelation($item, 'content');