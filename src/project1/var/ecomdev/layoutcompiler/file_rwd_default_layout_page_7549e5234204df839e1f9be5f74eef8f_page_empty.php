<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/empty.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setIsHandle'), 'root', function ($block) { return $block->setIsHandle('1'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setLayoutCode'), 'root', function ($block) { return $block->setLayoutCode('empty'); }, array()), false);
$this->addItemRelation($item, 'root');