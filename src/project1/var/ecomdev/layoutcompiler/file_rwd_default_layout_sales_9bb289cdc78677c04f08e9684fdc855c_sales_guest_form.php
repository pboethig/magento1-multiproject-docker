<?php $this->addItem($item = new EcomDev_LayoutCompiler_Model_Layout_Item_Action(array('method' => 'setTemplate'), 'root', function ($block) { return $block->setTemplate('page/1column.phtml'); }, array()), false);
$this->addItemRelation($item, 'root');
$this->addItem($item = new EcomDev_LayoutCompiler_Layout_Item_Block(array('type' => 'sales/widget_guest_form', 'name' => 'guest.form', 'template' => 'sales/guest/form.phtml'), 'guest.form', 'content', array()), false);
$this->addItemRelation($item, 'guest.form');
$this->addItemRelation($item, 'content');