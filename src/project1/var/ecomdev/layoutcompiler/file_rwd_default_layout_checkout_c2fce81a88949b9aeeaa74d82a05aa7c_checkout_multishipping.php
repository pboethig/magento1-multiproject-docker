<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'checkout/multishipping_state', 'name' => 'checkout_state', 'template' => 'checkout/multishipping/state.phtml'), 'checkout_state', 'content', array()), false);
$this->addItemRelation($item, 'checkout_state');
$this->addItemRelation($item, 'content');