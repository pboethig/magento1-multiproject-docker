<?php $this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('right'));
$this->addItem(new EcomDev_LayoutCompiler_Layout_Item_Remove('left'));
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setHeaderTitle', 'translate' => 'title', 'module' => 'customer'), 'root', function ($block) { return $block->setHeaderTitle(Mage::helper('customer')->__('Send confirmation link')); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'core/template', 'name' => 'accountConfirmation', 'template' => 'customer/form/confirmation.phtml'), 'accountConfirmation', 'content', array()), false);
$this->addItemRelation($item, 'accountConfirmation');
$this->addItemRelation($item, 'content');