<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'unittest/index', 'name' => 'pebo/unittest_index', 'template' => 'pebo/unittest/index.phtml'), 'pebo/unittest_index', 'content', array()), false);
$this->addItemRelation($item, 'pebo/unittest_index');
$this->addItemRelation($item, 'content');