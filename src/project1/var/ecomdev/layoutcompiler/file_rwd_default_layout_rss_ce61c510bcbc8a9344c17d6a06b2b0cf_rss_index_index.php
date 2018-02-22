<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/2columns-right.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'rss/list', 'name' => 'rss.list', 'template' => 'rss/list.phtml'), 'rss.list', 'content', array()), false);
$this->addItemRelation($item, 'rss.list');
$this->addItemRelation($item, 'content');