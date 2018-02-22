<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'default_no_route', 'template' => 'cms/default/no-route.phtml'), 'default_no_route', 'content', array()), false);
$this->addItemRelation($item, 'default_no_route');
$this->addItemRelation($item, 'content');