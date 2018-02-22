<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/order_view', 'name' => 'sales.order.view'), 'sales.order.view', 'content', array()), false);
$this->addItemRelation($item, 'sales.order.view');
$this->addItemRelation($item, 'content');