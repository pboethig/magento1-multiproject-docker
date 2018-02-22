<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/2columns-right.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'review/view', 'name' => 'review_view'), 'review_view', 'content', array()), false);
$this->addItemRelation($item, 'review_view');
$this->addItemRelation($item, 'content');