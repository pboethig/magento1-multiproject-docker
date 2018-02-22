<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'unittest/index', 'name' => 'pebo/unittest_test', 'template' => 'pebo/unittest/test.phtml'), 'pebo/unittest_test', 'content', array()), false);
$this->addItemRelation($item, 'pebo/unittest_test');
$this->addItemRelation($item, 'content');