<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/2columns-right.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'tag/all', 'name' => 'tags_all', 'template' => 'tag/cloud.phtml'), 'tags_all', 'content', array()), false);
$this->addItemRelation($item, 'tags_all');
$this->addItemRelation($item, 'content');