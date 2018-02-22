<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate(''); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'shipping/tracking_ajax', 'name' => 'shipping.tracking.ajax', 'template' => 'shipping/tracking/ajax.phtml'), 'shipping.tracking.ajax', 'content', array()), false);
$this->addItemRelation($item, 'shipping.tracking.ajax');
$this->addItemRelation($item, 'content');