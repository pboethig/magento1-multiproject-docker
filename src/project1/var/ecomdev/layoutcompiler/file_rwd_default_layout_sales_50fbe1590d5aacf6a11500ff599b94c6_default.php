<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/guest_links', 'name' => 'return_link'), 'return_link', 'footer_links2', array()), false);
$this->addItemRelation($item, 'return_link');
$this->addItemRelation($item, 'footer_links2');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'addLinkBlock'), 'footer_links2', function ($block) { return $block->addLinkBlock('return_link'); }, array()), false);
$this->addItemRelation($item, 'footer_links2');