<?php $this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'cms/block', 'name' => 'cms_menu'), 'cms_menu', 'left_first', array()), false);
$this->addItemRelation($item, 'cms_menu');
$this->addItemRelation($item, 'left_first');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setBlockId'), 'cms_menu', function ($block) { return $block->setBlockId('cms_menu'); }, array(0 => 'left_first')), false);
$this->addItemRelation($item, 'cms_menu');
$this->addItemRelation($item, 'left_first');