<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'customer_logout', 'template' => 'customer/logout.phtml'), 'customer_logout', 'content', array()), false);
$this->addItemRelation($item, 'customer_logout');
$this->addItemRelation($item, 'content');